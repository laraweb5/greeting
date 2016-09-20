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
Route::get('/greeting', 'GreetingController@getIndex');
Route::post('/greeting', 'GreetingController@postIndex');

# 一覧画面
Route::get('greeting/all', 'GreetingController@all');

# 編集画面
Route::get('greeting/edit/{id}', 'GreetingController@edit');

# 編集フォーム⇒UPDATE処理
Route::patch('greeting/update/{id}', 'GreetingController@update');
