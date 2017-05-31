<?php

// Post sider
Route::get('/posts', 'PostsController@index')->name('home');;
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

// Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Forsiden
Route::get('/', function () { return view('index'); });
//Route::get('/admin', function() { return view('admin/index'); });
//Auth::routes();

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::post('/login', 'SessionController@store'); // logging in
//Route::get('/login', 'SessionController@create', [ 'as' => 'auth.login' ]) ;
Route::get('/login',['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('/logout', 'SessionController@destroy');

Route::get('/pages/{slug}', 'PagesController@getPage');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
