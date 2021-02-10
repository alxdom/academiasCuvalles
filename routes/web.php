<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

//RUTA HOME
Route::view('/home', 'home')->name('home');

//RUTAS PARA EVIDENCIAS
Route::get('/evidencias', 'EvidenciasController@index')->name('evidencias.index');//INDEX
Route::get('/showevidencias', 'EvidenciasController@ShowUploadEvidencias')->name('evidencias.show');//INDEX
Route::post('/evidencias','EvidenciasController@uploadEvidencias')->name('upload');

//RUTAS PARA GUÍAS
Route::get('/programasyguias', 'ProgramasGuiasController@index')->name('guias.index');//INDEX
// Route::get('/showevidencias', 'EvidenciasController@ShowUploadEvidencias')->name('evidencias.show');//INDEX
// Route::post('/evidencias','EvidenciasController@uploadEvidencias')->name('upload');

//RUTAS PARA ACTAS
Route::get('/actas', 'ActasController@index')->name('actas.index');//INDEX
// Route::get('/showevidencias', 'EvidenciasController@ShowUploadEvidencias')->name('evidencias.show');//INDEX
// Route::post('/evidencias','EvidenciasController@uploadEvidencias')->name('upload');

//RUTAS PARA ASIGNAR ACADEMIAS
//Route::get('/academiasAssign', 'academiasController@index')->name('academias.index');//INDEX
//Route::post('/academiasAssign', 'academiasController@store')->name('academias.store');//STORE
//Route::get('/academiasAssign/{id}/edit', 'academiasController@edit')->name('academias.edit');//EDIT
//Route::patch('/academiasAssign/{id}/edit', 'academiasController@update')->name('academias.update');//UPDATE
Route::resource('academiasAssign', 'academiasController');
Auth::routes(['register' => false, 'reset' => false]);


//GUZZLE
Route::get('logeo','academiasController@logeo')->name('logeo');


//RUTAS PARA LOGIN
Route::get('/', function () {return view('auth.login');})->middleware('guest');

Route::get('login','PersonaController@showLoginForm')->name('login');
Route::get('code','PersonaController@MostrarUsuario')->name('show_code');
Route::post('formulario_datos','PersonaController@iniciarSesion')->name('validar_usuario');

Route::get('/foo', function () {
    Artisan::call('storage:link');
});




