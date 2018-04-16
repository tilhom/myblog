# Lara blog by Ilyos Xizr

## 1. Layout

create views/layouts/main.blade.php

create views/layouts/nav.blade.php

create views/layouts/header.blade.php

create views/layouts/footer.blade.php


```code
php artisan make:model Post -mc;
```
create route 
```php
Route::get('/','PostsController@index');
```
create action PostsController@index
```php
    public function index()
    {
    	return view('post.index');
    }
```
create views/post/index.blade.php








