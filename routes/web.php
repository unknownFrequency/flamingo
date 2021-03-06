<?php

// PROTECTED AREAS //
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/posts/create', 'PostsController@create');
    Route::post('/posts', 'PostsController@store');

});

//Route::get('/filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
//Route::get('/filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
Route::get('/filemanager', [
        'as' => 'filemanager',
        'uses' => '\Unisharp\Laravelfilemanager\controllers\LfmController@show' 
]);
Route::post('/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');

// MESSAGES //
Route::get('/beskeder', 'MessagesController@index');
Route::get('/beskeder/create', 'MessagesController@create');
Route::get('/beskeder/{id}', 'MessagesController@show');
Route::post('/beskeder', 'MessagesController@store');
Route::get('/beskeder/{id}/edit', 'MessagesController@edit');
Route::patch('/beskeder/{id}', 'MessagesController@update');
Route::get('/beskeder/{id}/respond', 'MessageResponsesController@create');
Route::post('/beskeder/{id}/respond', 'MessageResponsesController@store');

// Post - BLOG //
Route::get('/posts', 'PostsController@index')->name('home');;
Route::get('/posts/{post}', 'PostsController@show');

// Comments //
Route::post('/posts/{post}/comments', 'CommentsController@store');

// FORSIDEN //
Route::get('/', function () { return view('index'); });

// LOGIN, REGISTRATION ETC. //
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionController@store'); // logging in
Route::get('/login',['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('/logout', 'SessionController@destroy');

Route::get('/pages/{slug}', 'PagesController@getPage');

// USERS //
Route::get('/users/{id}', 'UsersController@show');
Route::get('/users/{id}/edit', 'UsersController@edit'); // edit action redirects to Voyager edit user view /admin/users/{id}/edit

// KLIPPEKORT //
Route::get('/klippekort', 'KlippekortController@index');
Route::post('/klippekort', 'KlippekortController@store');
Route::get('/nyt-klippekort', 'KlippekortController@create');
Route::get('/klippekort/{id}', 'KlippekortController@show');
Route::put('/klippekort/{id}', 'KlippekortController@update');


Route::get('/weblosninger', [
        'as' => 'weblosninger',
        'uses' => 'WebsolutionsController@index' ]
);
//Route::get('/weblosninger', 'WebsolutionsController@index');
//Route::get('/weblosninger', array() 'WebsolutionsController@index');
Route::get('/webshops', 'WebshopsController@index');
Route::get('/grafik', 'GraphicsController@index');
Route::get('/foto', 'PhotosController@index');
Route::get('/haandvaerkertilbud', 'OfferController@index');


// KONTAKT //
Route::get('/kontakt', 'ContactController@index');
Route::post('/kontakt', 'ContactController@contact');
Route::post('/sms', 'SmsController@send');

Route::get('/priser', 'PricesController@index');

Route::get('/tak', function () {
  return view('tak');
})->name('tak');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//active(['kontakt', 'priser', 'posts/*']);
//Route::get('mail', 'MailController@mail');
