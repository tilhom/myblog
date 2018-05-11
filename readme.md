# Lara blog by Ilyos Xizr (laravel 5.6)

## Installing App

Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

You may install Laravel by issuing the Composer create-project command in your terminal:
```
composer create-project laravel/laravel blog
```
copy .env.example to .env file

Create a new database end fix .env file

Then create tables and dummy data 
```
php artisan migrate:fresh --seed
```
## Local Development Server

If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:
```
php artisan serve
```




