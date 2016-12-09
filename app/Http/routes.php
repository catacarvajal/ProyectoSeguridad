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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/Buscar', 'BuscarController@index');
Route::post('/Buscar', 'BuscarController@postPokemon');
Route::get('/Comentario/{id}', 'CommentaryController@index');

Route::get('/Buscar/show/{id}', 'BuscarController@show');

Route::post('/crearComentario', 'CommentaryController@store');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
