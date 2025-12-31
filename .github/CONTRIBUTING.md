# Contributing

Contributions are **welcome** and will be fully **credited**!

Please read and understand this contribution guide before creating an issue or pull request.

## 🚀 Before Contributing

- Search existing issues to avoid duplicates
- Check if your feature/fix is already being worked on
- Familiarize yourself with the project structure and README.md

## 📋 Development Requirements

### **Code Standards**

- **PSR-12** coding standards (enforced by Laravel Pint)
- **Laravel Pint** for code formatting
- **PHPStan** for static analysis

### **Testing Requirements**

- **Pest PHP** testing framework (v4)
- **100% test coverage** for new features
- **Browser tests** for frontend changes

## 🔧 Development Workflow

### **Setup Development Environment**

```bash
# Clone and setup
git clone <your-fork-url>
cd <project-directory>
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Configure database connection in .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=your_database
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# Setup database (runs migrations and seeds)
composer setup

# Start development
composer dev
```

### **Before Submitting PR**

```bash
# Run all quality checks and tests
composer test:fix
```

## 📝 Pull Request Guidelines

### **PR Requirements**

- **One feature/fix per PR** - keep changes focused
- **Descriptive title** that explains the change
- **Detailed description** of what and why
- **Link related issues** using keywords like "Fixes #123"

### **Code Quality Checklist**

- [ ] Code follows PSR-12 standards
- [ ] All quality checks and tests pass (`composer test:fix`)
- [ ] Type coverage remains at 100%
- [ ] Documentation updated if needed

### **Commit Guidelines**

- **Conventional commits** preferred (feat:, fix:, docs:, etc.)
- **Meaningful commit messages** that explain the change
- **Squash intermediate commits** before submitting

## 🧪 Testing Guidelines

- **Unit tests** for all new methods/classes
- **Feature tests** for new functionality
- **Browser tests** for frontend changes
- **Test coverage** must not decrease

## 📚 Documentation

- Update `README.md` for user-facing changes
- Update inline code documentation
- Add examples for new features

## 🚫 What We Don't Accept

- **Breaking changes** without major version bump
- **Untested code** or features
- **Code that fails quality checks**
- **Changes that decrease test coverage**

## 🎉 Getting Help

- **GitHub Discussions** for questions and ideas
- **GitHub Issues** for bugs and feature requests
- **Security issues** email: security@hotash.tech

---

**Happy coding! 🚀**

Thank you for contributing to this Laravel application!
