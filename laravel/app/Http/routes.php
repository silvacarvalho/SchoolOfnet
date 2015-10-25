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

Route::get('cliente', 'ClienteController@index'); //Resgata todos os registros em formato Json.
Route::post('cliente', 'ClienteController@store'); //Cria Registro do Form enviado por Post.
Route::get('cliente/{id}', 'ClienteController@show'); //Resgata um registro específico em formato Json.
Route::delete('cliente/{id}', 'ClienteController@destroy'); //Destroi um registro específo.
Route::post('cliente/{id}', 'ClienteController@update'); //Atualiza um registro específo.