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
Route::get('/login',['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('/logout', 'SessionController@destroy');

Route::get('/pages/{slug}', 'PagesController@getPage');

// USERS
Route::get('/users/{id}', 'UsersController@show');
// edit action redirects to Voyager edit user view /admin/users/{id}/edit
Route::get('/users/{id}/edit', 'UsersController@edit');

Route::get('/messages', 'MessagesController@index');
Route::get('/messages/create', 'MessagesController@create');
Route::get('/messages/{id}', 'MessagesController@show');
Route::post('/messages', 'MessagesController@store');
Route::get('/messages/{id}/edit', 'MessagesController@edit');
Route::patch('/messages/{id}', 'MessagesController@update');

Route::get('/messages/{id}/respond', 'MessageResponsesController@create');
Route::post('/messages/{id}/respond', 'MessageResponsesController@store');

Route::post('/sms', 'SmsController@send');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
