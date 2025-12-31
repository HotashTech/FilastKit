#!/bin/bash

echo "🚀 Setting up native Git pre-commit hook..."

# Check if we're in a git repository
if [ ! -d ".git" ]; then
    echo "❌ Not in a git repository. Please run this from the project root."
    exit 1
fi

# Check if composer is installed
if ! command -v composer &> /dev/null; then
    echo "❌ composer is not installed. Please install Composer first."
    exit 1
fi

# Check if npm is installed
if ! command -v npm &> /dev/null; then
    echo "❌ npm is not installed. Please install Node.js first."
    exit 1
fi

echo "📦 Installing dependencies..."
composer install
npm install

echo "🔧 Creating pre-commit hook..."
cat > .git/hooks/pre-commit << 'EOF'
#!/bin/bash

# Skip hook if SKIP_PRE_COMMIT is set
if [ "$SKIP_PRE_COMMIT" = "1" ]; then
    echo "⚠️  Pre-commit hook skipped (SKIP_PRE_COMMIT=1)"
    exit 0
fi

echo "🔍 Running pre-commit checks..."

# Run quick tests (includes linting, analysis, type coverage, and unit tests)
echo "🧪 Running comprehensive checks..."
composer test:quick
if [ $? -ne 0 ]; then
    echo "❌ Pre-commit checks failed. Please fix the issues before committing."
    echo "💡 You can run 'composer test:fix' to automatically fix many issues."
    exit 1
fi

echo "✅ All pre-commit checks passed!"
EOF

echo "🔒 Setting executable permissions..."
chmod +x .git/hooks/pre-commit

echo "✅ Native Git pre-commit hook setup complete!"
echo ""
echo "🎯 What happens now:"
echo "   - Every git commit will run quality checks and tests"
echo "   - Commits will be blocked if checks fail"
echo "   - Run 'bash .git/hooks/pre-commit' to test manually"
echo ""
echo "📚 For more info, see: docs/PRE-COMMIT.md"
