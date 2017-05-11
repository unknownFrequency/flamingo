<?php

Route::get('/artikler', 'PostsController@index');
Route::get('/', function () {
    return view('welcome');
});
