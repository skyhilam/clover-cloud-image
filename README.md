# Cloud Image

[![Build Status](https://travis-ci.org/clover/cloud-image.svg?branch=master)](https://travis-ci.org/clover/cloud-image)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/clover/cloud-image/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/clover/cloud-image/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/clover/cloud-image/badge.svg?branch=master)](https://coveralls.io/github/clover/cloud-image?branch=master)

[![Packagist](https://img.shields.io/packagist/v/clover/cloud-image.svg)](https://packagist.org/packages/clover/cloud-image)
[![Packagist](https://poser.pugx.org/clover/cloud-image/d/total.svg)](https://packagist.org/packages/clover/cloud-image)
[![Packagist](https://img.shields.io/packagist/l/clover/cloud-image.svg)](https://packagist.org/packages/clover/cloud-image)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require clover/cloud-image
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Clover\CloudImage\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Clover\CloudImage\Facades\CloudImage::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Clover\CloudImage\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/clover/cloud-image)
- [All contributors](https://github.com/clover/cloud-image/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
