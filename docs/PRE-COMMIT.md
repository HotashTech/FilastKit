# Pre-Commit Hook Setup

Automatically run quality checks before every commit to keep your code clean and tests passing.

## 🚀 Quick Start

```bash
# 1. Setup everything automatically
bash scripts/setup-git-hook.sh

# 2. That's it! Now every commit runs checks automatically
git add .
git commit -m "feat: add new feature"
```

## 🔍 What Gets Checked

Every commit automatically runs:

- ✅ Code formatting (Laravel Pint + Prettier)
- ✅ Static analysis (PHPStan)
- ✅ Type coverage
- ✅ Unit tests

## 🚨 If Checks Fail

The commit is blocked until you fix the issues:

```bash
# Auto-fix most issues
composer test:fix

# Or run checks manually to see what's wrong
composer test:quick
```

## ⚡ Skip Hook (Emergency Only)

```bash
SKIP_PRE_COMMIT=1 git commit -m "emergency fix"
```

## 🎯 Benefits

- **Prevents broken code** from being committed
- **Catches issues early** in development
- **Maintains code quality** automatically
- **No external dependencies** - pure Git hooks

## 🆘 Troubleshooting

```bash
# Hook not running?
ls -la .git/hooks/pre-commit

# Permission issues?
chmod +x .git/hooks/pre-commit

# Test manually
bash .git/hooks/pre-commit
```

---

**That's it!** Your pre-commit hook is now protecting your code quality on every commit. 🚀
