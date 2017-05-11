<?php

// Post / Artikler siden
Route::get('/artikler', 'PostsController@index');
Route::get('/artikler/create', 'PostsController@create');
Route::get('/artikler/{post}', 'PostsController@show');
Route::post('/artikler', 'PostsController@store');

// Forsiden
Route::get('/', function () {
    return view('welcome');
});
