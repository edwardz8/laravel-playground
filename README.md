<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com)

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Notes

## IMPORT CSV File into MySQL with Laravel

$ composer create-project laravel/laravel laravel-seed-tutorial

$ cd laravel-seed-tutorial
 
$ php artisan serve

// Edit the .env file and rename the database variables 

## Install Inertia (Vue.js) and Breeze

$ composer require laravel/breeze --dev
 
$ php artisan breeze:install vue

// Open at least 2 tabs in your terminal and run:

$ php artisan serve 

$ npm run dev

## Clean the data of the CSV file downloaded from internet

## Create csv folder inside the database directory and then drag the CSV file over from your downloads or desktop into the csv folder:

// database/csv/csv-file-name.csv 

$ php artisan make:model quarterback -m 

// edit database/migrations/create_quarterback_table.php 

// edit app/Models/quarterback.php 

$ php artisan migrate 

## Create seeder

$ php artisan make:seeder QuarterbackSeeder

// edit create_quarterback_table.php migration file

// Instantiate QuarterbackSeeder inside DatabaseSeeder.php 

 $this->call([
            QuarterbackSeeder::class 
        ]);


// Runs Seeder
$ php artisan db:seed --class=QuarterbackSeeder
$ sail artisan db:seed

// Drops all tables, re-runs all migrations and rebuilds database 
$ sail or php artisan migrate:fresh --seed


## Displaying the Data

// Http/Controllers/QuarterbackControllers.php

// routes/web.php
