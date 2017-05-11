<?php

// Post / Artikler siden
Route::get('/posts', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');

// Forsiden
Route::get('/', function () {
    return view('welcome');
});
