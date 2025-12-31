# Filament Starter Kit

A modern Laravel 12+ **Filament** starter kit built with the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire) and best practices for rapid application development.

<p align="center">
<a href="https://github.com/HotashTech/FilastKit/actions"><img src="https://github.com/HotashTech/FilastKit/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/hotash/filastkit"><img src="https://img.shields.io/packagist/dt/hotash/filastkit" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hotash/filastkit"><img src="https://img.shields.io/packagist/v/hotash/filastkit" alt="Latest Stable Version"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License"></a>
</p>

<details>
<summary><strong>🚀 Features</strong></summary>

- **Laravel 12+** - Latest Laravel framework with modern PHP 8.4+ features
- **Filament** - Admin panel scaffolding (pre-installed)
- **TALL Stack** - Tailwind CSS v4, Alpine.js, Laravel, Livewire
- **Modern Architecture** - Laravel 12 streamlined structure with bootstrap/app.php configuration
- **Testing Ready** - Pest testing framework with comprehensive test setup
- **Code Quality** - Laravel Pint for code formatting, PHPStan for static analysis
- **Development Tools** - Vite for asset compilation, comprehensive development workflow
- **CI/CD Ready** - GitHub Actions with unified workflows and matrix strategies

</details>

<details>
<summary><strong>🛠️ Tech Stack</strong></summary>

- **Backend**: Laravel 12+, PHP 8.4+
- **Admin Panel**: Filament
- **Frontend**: Tailwind CSS v4, Alpine.js, Livewire
- **Testing**: Pest PHP
- **Code Quality**: Laravel Pint, PHPStan
- **Build Tool**: Vite
- **Database**: MySQL/PostgreSQL/SQLite ready

</details>

<details>
<summary><strong>📋 Requirements</strong></summary>

- PHP 8.4 or higher
- Composer
- Node.js & NPM
- Database (MySQL, PostgreSQL, or SQLite)

</details>

<details>
<summary><strong>🚀 Quick Start</strong></summary>

### 1. Clone the repository

```bash
git clone https://github.com/HotashTech/FilastKit.git
cd FilastKit
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install Node.js dependencies

```bash
npm install
```

### 4. Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure your database in `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Setup database and seed data

```bash
composer setup
```

### 7. Build assets

```bash
npm run build
```

### 8. Start development server

```bash
php artisan serve
```

</details>

<details>
<summary><strong>🎨 Development Workflow</strong></summary>

### Available Composer Scripts

```bash
# Setup database (migrate fresh + seed)
composer setup

# Testing
composer test:fix       # Run tests with fixes and improvements
composer test:all       # Run all tests (linting, analysis, coverage, unit, browser)
composer test:quick     # Quick test run
composer test:unit      # Run only unit tests
composer test:browser   # Run browser tests

# Code quality
composer lint:fix       # Fix code formatting
composer lint:test      # Check code formatting
composer analyse        # Static analysis (2GB memory limit)
composer analyse:full   # Static analysis (unlimited memory)
composer analyse:test   # Static analysis with ANSI output

# Development
composer dev            # Start all services (server, queue, logs, vite)
composer queue          # Start queue worker
composer schedule       # Start scheduler
```

</details>

</details>

<details>
<summary><strong>📦 Asset Compilation</strong></summary>

```bash
# Development with hot reload
npm run dev

# Production build
npm run build

# Watch for changes
npm run watch
```

</details>

<details>
<summary><strong>🔍 Code Quality</strong></summary>

```bash
# Format code and fix linting issues
composer lint:fix

# Check code quality without fixing
composer lint:test

# Run static analysis
composer analyse:test

# Run tests with fixes
composer test:fix
```

</details>

<details>
<summary><strong>🏗️ Project Structure</strong></summary>

```
FilastKit/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Filament/             # Filament resources, pages, widgets, panels
│   ├── Models/               # Eloquent models
│   ├── Services/             # Business logic services
│   └── Providers/            # Service providers
├── bootstrap/
│   ├── app.php              # Application configuration (Laravel 12+)
│   └── providers.php        # Service providers
├── config/                   # Configuration files
├── database/
│   ├── factories/           # Model factories
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── resources/
│   ├── css/                 # CSS files
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
├── routes/
│   ├── web.php              # Web routes
│   └── console.php          # Console commands
└── tests/                   # Pest tests
```

</details>

<details>
<summary><strong>🧪 Testing</strong></summary>

This starter kit uses Pest for testing. Tests are located in the `tests/` directory:

```bash
# Run all tests with fixes and improvements
composer test:fix

# Run all tests (linting, analysis, coverage, unit, browser)
composer test:all

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run tests with filter
php artisan test --filter=testName

# Quick test run (without fixes)
composer test:quick

# Run only unit tests
composer test:unit

# Run browser tests
composer test:browser
```

</details>

<details>
<summary><strong>📚 Key Laravel 12+ Features</strong></summary>

- **Streamlined Structure**: No more `app/Console/Kernel.php` or `RouteServiceProvider`
- **Bootstrap Configuration**: Configure routing, middleware, and exceptions in `bootstrap/app.php`
- **Auto-registering Commands**: Commands in `app/Console/Commands/` are automatically available
- **Modern PHP Features**: Constructor property promotion, typed properties, and more

</details>

<details>
<summary><strong>🎯 Best Practices</strong></summary>

- Use Form Request classes for validation
- Keep controllers thin with business logic in services
- Use Eloquent relationships over raw queries
- Implement proper error handling and logging
- Follow PSR-12 coding standards
- Write comprehensive tests for all features

</details>

<details>
<summary><strong>🔧 Configuration</strong></summary>

### Laravel Pint

Code formatting is configured in `pint.json` and follows PSR-12 standards.

### PHPStan

Static analysis is configured in `phpstan.neon` for code quality assurance.

### Vite

Frontend build tool configuration in `vite.config.js` for modern asset compilation.

### GitHub Actions

CI/CD workflows are configured with unified setup and matrix strategies:

- **Tests**: Matrix strategy with 4 shards for parallel testing
- **Quality**: Matrix strategy for pint, phpstan, rector, and composer checks
- **Deployment**: Deployment validation and migration checks

</details>

<details>
<summary><strong>📖 Documentation</strong></summary>

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS v4](https://tailwindcss.com/docs)
- [Alpine.js](https://alpinejs.dev/)
- [Livewire](https://livewire.laravel.com/)
- [Pest PHP](https://pestphp.com/)

</details>

<details>
<summary><strong>🤝 Contributing</strong></summary>

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

</details>

<details>
<summary><strong>📄 License</strong></summary>

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

</details>

<details>
<summary><strong>🙏 Acknowledgments</strong></summary>

- [Laravel Team](https://laravel.com) for the amazing framework
- [Tailwind CSS](https://tailwindcss.com) for the utility-first CSS framework
- [Alpine.js](https://alpinejs.dev/) for lightweight JavaScript framework
- [Livewire](https://livewire.laravel.com/) for full-stack development
- [Pest PHP](https://pestphp.com/) for elegant testing

</details>

---

**Happy coding! 🚀**
