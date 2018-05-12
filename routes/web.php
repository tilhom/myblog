<?php
Route::get('/','PostController@index')->name('home');
// Route::get('/home','PostController@index')->name('home');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{id}','PostController@show');
Route::post('/posts/{post}/comments','CommentController@store');

Route::get('/posts/tags/{tag}','TagsController@index');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');