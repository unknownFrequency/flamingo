<?php

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/messages', 'MessagesController@index');
    Route::get('/messages/create', 'MessagesController@create');
    Route::get('/messages/{id}', 'MessagesController@show');
    Route::post('/messages', 'MessagesController@store');
    Route::get('/messages/{id}/edit', 'MessagesController@edit');
    Route::patch('/messages/{id}', 'MessagesController@update');
    Route::get('/messages/{id}/respond', 'MessageResponsesController@create');
    Route::post('/messages/{id}/respond', 'MessageResponsesController@store');

    Route::get('/posts/create', 'PostsController@create');
    Route::post('/posts', 'PostsController@store');
});

// Post sider
Route::get('/posts', 'PostsController@index')->name('home');;
Route::get('/posts/{post}', 'PostsController@show');

// Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Forsiden
Route::get('/', function () { return view('index'); });

//LOGIN, REGISTRATION ETC.
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionController@store'); // logging in
Route::get('/login',['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('/logout', 'SessionController@destroy');

Route::get('/pages/{slug}', 'PagesController@getPage');

// USERS
Route::get('/users/{id}', 'UsersController@show');
Route::get('/users/{id}/edit', 'UsersController@edit'); // edit action redirects to Voyager edit user view /admin/users/{id}/edit



Route::post('/sms', 'SmsController@send');

Route::get('/weblosninger', 'WebsolutionsController@index');
Route::get('/webshops', 'WebshopsController@index');
Route::get('/grafik', 'GraphicsController@index');
Route::get('/foto', 'PhotosController@index');


Route::get('/kontakt', 'ContactController@index');
Route::get('/priser', 'PricesController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

