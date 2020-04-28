<?php

use Illuminate\Support\Facades\Route;

//RUTA HOME
Route::view('/', 'home')->name('home');
//RUTAS PARA EVIDENCIAS
Route::get('evidencias', 'EvidenciasController@index')->name('evidencias.index');//INDEX
Route::post('/evidencias','EvidenciasController@upload')->name('upload');//FUNCION PARA SUBIR EVIDENCIAS

Route::post('formulario_datos','PersonaController@iniciarSesion')->name('validar_usuario');

Auth::routes();


