<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Project

This is a rest api where i put some knowledges about laravel framework, here i build a basic api service to list and search users and categories. For this project i'm using strong typing, dependency injection, POO, clean code, SOLID principles among others goods practices.

## Start Project

Before you download project, please run:

```bash
# install vendor packages
$ composer install
```

After configure your .env file according your database enviroment and execute the migrations and seeders:

```bash
# migrate the data structure to database provider
$ php artisan migrate
$ php artisan db:seed
```

For generate the new application key

```bash
# generat new key aplication on the .env file
$ php artisan key:generate
```

After that, you can start the application in local environment with:

```bash
# start the virtual server and run application
$ php artisan serve
```

When you are creating users you need execute de queue worker to send emails, do it with:

```bash
# start the queue worker
$ php artisan queue:work
```