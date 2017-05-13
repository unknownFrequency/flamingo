<?php

// Post sider
Route::get('/posts', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');

// Forsiden
Route::get('/', function () { return view('welcome'); });

Auth::routes();

// For logged in users
Route::get('/home', 'HomeController@index')->name('home');
