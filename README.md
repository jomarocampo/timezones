# Timezones for Laravel 5

A simple [Laravel 5](http://www.laravel.com/) service provider for including the [Timezones for Laravel 5](https://github.com/amatz5/timezones).

## Installation

The Timezones Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`jomar/timezones` package (required for Laravel 5) in your project's `composer.json`.

```json
{
    "require": {
        "laravel/framework": "5.0.*",
        "jomar/timezones": "dev-master"
    },
}
```

or

Require this package with composer:
```
composer require jomar/timezones
```

Update your packages with ```composer update``` or install with ```composer install```.

## Usage

To use the Timezones Service Provider, you must register the provider when bootstrapping your Laravel application. There are
essentially two ways to do this.

Find the `providers` key in `config/app.php` and register the Captcha Service Provider.

```php
    'providers' => [
        // ...
        'Jomar\Timezones\TimezonesServiceProvider',
    ]
```
for Laravel 5.1+
```php
    'providers' => [
        // ...
        Jomar\Timezones\TimezonesServiceProvider::class,
    ]
```

Find the `aliases` key in `config/app.php`.

```php
    'aliases' => [
        // ...
        'Timezones' => 'Jomar\Timezones\Facades\Timezones',
    ]
```
for Laravel 5.1+
```php
    'aliases' => [
        // ...
        'Timezones' => Jomar\Timezones\Facades\Timezones::class,
    ]
```
