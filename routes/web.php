<?php
Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{id}','PostController@show');
Route::post('/posts/{post}/comments','CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
