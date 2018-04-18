# Lara blog by Ilyos Xizr

## 1. Layout

create views/layouts/main.blade.php

create views/layouts/nav.blade.php

create views/layouts/header.blade.php

create views/layouts/footer.blade.php

```code
php artisan make:model Post -mc;
```
migration
```code
Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
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

create route 
```php
Route::get('/posts/create','PostController@create');
```
create views/post/create.blade.php

create route 
```php
Route::post('/posts','PostController@store');
```

create store in PostsController






