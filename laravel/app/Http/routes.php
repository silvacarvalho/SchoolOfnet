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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente', 'ClienteController@index');
Route::post('cliente', 'ClienteController@store');
Route::get('cliente/{id}', 'ClienteController@show');
Route::delete('cliente/{id}', 'ClienteController@destroy');
Route::post('cliente/post/{id}', 'ClienteController@update');