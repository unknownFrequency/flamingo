<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) { */
/*   return $request->user(); */
/* }); */

Route::get('klippekort', 'KlippekortController@index');
Route::get('klippekort/{product}', 'KlippekortController@show');
Route::post('klippekort','KlippekortController@store');
Route::put('klippekort/{klippekort}','KlippekortController@update');
Route::delete('klippekort/{klippekort}', 'KlippekortController@delete');
