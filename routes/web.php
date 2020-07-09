<?php

use Illuminate\Support\Facades\Route;

//RUTA HOME
Route::view('/home', 'home')->name('home');

//RUTAS PARA EVIDENCIAS
Route::get('/evidencias', 'EvidenciasController@index')->name('evidencias.index');//INDEX
Route::post('/evidencias','EvidenciasController@upload')->name('upload');//FUNCION PARA SUBIR EVIDENCIAS

//RUTAS PARA ASIGNAR ACADEMIAS
Route::get('/academiasAssign', 'academiasController@index')->name('academias.index');//INDEX
Route::post('/academiasAssign', 'academiasController@store')->name('academias.store');//STORE
Route::get('/academiasAssign/edit/{id}', 'academiasController@edit')->name('academias.edit');//EDIT
Route::patch('/academiasAssign/edit/{id}', 'academiasController@update')->name('academias.update');//UPDATE


//RUTAS PARA LOGIN
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('login','PersonaController@showLoginForm')->name('login');
Route::get('code','PersonaController@MostrarUsuario')->name('show_code');
Route::post('formulario_datos','PersonaController@iniciarSesion')->name('validar_usuario');




