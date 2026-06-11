![alt text](https://marshmallow.dev/cdn/media/logo-red-237x46.png "marshmallow.")

# Mr Mallow

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow/mr-mallow.svg?style=flat-square)](https://packagist.org/packages/marshmallow/mr-mallow)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow/mr-mallow.svg?style=flat-square)](https://packagist.org/packages/marshmallow/mr-mallow)
[![Issues](https://img.shields.io/github/issues/marshmallow-packages/mr-mallow?style=flat-square)](https://github.com/marshmallow-packages/mr-mallow/issues)
[![License](https://img.shields.io/github/license/marshmallow-packages/mr-mallow?style=flat-square)](https://github.com/marshmallow-packages/mr-mallow/blob/main/LICENSE.md)
![PHP Syntax Checker](https://github.com/marshmallow-packages/mr-mallow/workflows/PHP%20Syntax%20Checker/badge.svg)

Speciale Mr Mallow functies — a small Laravel package that registers Mr Mallow helpers for use across Marshmallow projects.

## Installation

Install the package via Composer:

```bash
composer require marshmallow/mr-mallow
```

The package is auto-discovered through Laravel package discovery, so no manual service provider or alias registration is required.

Optionally publish the config file:

```bash
php artisan vendor:publish --provider="Marshmallow\MrMallow\MrMallowServiceProvider"
```

This copies `config/mr-mallow.php` into your application's `config` directory.

## Usage

The package registers a `mr-mallow-ascii` Blade component that renders the Marshmallow ASCII banner. Drop it into any Blade view:

```html
<x-mr-mallow-ascii />
```

## Testing

This package ships a PHP syntax check that runs in CI via the [`php-syntax-checker.yml`](.github/workflows/php-syntax-checker.yml) workflow.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

If you discover any security related issues, please email stef@marshmallow.dev instead of using the issue tracker.

## Credits

- [Stef](https://marshmallow.dev)
- [All Contributors](https://github.com/marshmallow-packages/mr-mallow/contributors)

## License

The MIT License (MIT). Please see the [License File](LICENSE.md) for more information.
