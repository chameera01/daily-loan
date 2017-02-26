# Lumen restful api for daily-loan

[![unstable](http://badges.github.io/stability-badges/dist/unstable.svg)](http://github.com/badges/stability-badges)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Installation

- enable following extension in php.ini (PHP version >= 5.6.4)
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
- create your own .env file and configure db settings (if you not intend to use memcached and cach_driver use something else)
- now run following commands in the root of the project
    - php artisan migrate:install
    - php artisan migrate
    - php artisan db:seed
    - php -S localhost:8000 -t public/
- now application is up and running in localhost:8000/api/v1

Documentation for the lumen framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## report any issues

If you discover any difficulties kindly create an issue under correct milestone
