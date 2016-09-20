<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','WelcomeController@index');
//
Route::get('/link','LinkController@index');
//
//Route::get('/bootstrap', 'BootstrapController@index');

//Route::controller('greeting/', 'GreetingController');
#Route::get('/greeting/show', 'GreetingController@show');
Route::get('greeting/all', 'GreetingController@all');

Route::get('/greeting/edit/{id}', 'GreetingController@edit');

Route::get('/greeting', 'GreetingController@getIndex');
Route::post('/greeting', 'GreetingController@postIndex');


