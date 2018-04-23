<?php
Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{id}','PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
