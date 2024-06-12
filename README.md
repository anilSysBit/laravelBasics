<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


## Create a controller
    php artisan make::controller ExampleController
    


## Using Single Action Controller in laravel

    php artisam make:controller SingleActionController --invokable

## Resource Controller
    php artisam make:controller ResourceController --resource

## Validation
    (without namespace)
    'password'-> 'required|confirmed'
    'password_confirmation -> 'required'
        
        or (with own name)

    'passowrd'-> 'required'
    'password_confir -> 'required|same:password'



## Database Table

    php artisan config:Cache
    php artisan migrate
    php artisan make:migration create_table_(name_table)
    php artisan migrate:rollback
    php artisan migrate:refresh
    php artisan make:migration
    php artisam make:migration add_columns_to_(table_name)


## Model

Create a model
    php artisam make:modal ModelName

run migration along with model
    php artisan make:model Mdelname --migration


# Customer Helper

To make custom herlper you should create a file with [name].php and inclue that file path on composer.json autoload:[files:[
    "path/[name].php
]];

& run a command
composer dump-autoload

## Mutator and Accessor

data to be modified before storing to database


## SESSION

    $request -> session() ->get('key')
    session('key')

    $request -> session() -> all();
    session()->all

    $request -> session() ->put('key','value')
    session(['key','value']);


