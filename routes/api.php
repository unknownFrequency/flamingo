<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('klippekort', 'KlippekortController@index');
Route::get('klippekort/{product}', 'KlippekortController@show');
Route::post('klippekort','KlippekortController@store');
Route::put('klippekort/{klippekort}','KlippekortController@update');
Route::delete('klippekort/{klippekort}', 'KlippekortController@delete');
