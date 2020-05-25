<?php

use Illuminate\Support\Facades\Route;

//RUTA HOME
Route::view('/home', 'home')->name('home');
//RUTAS PARA EVIDENCIAS
Route::get('/evidencias', 'EvidenciasController@index')->name('evidencias.index');//INDEX
Route::post('/evidencias','EvidenciasController@upload')->name('upload');//FUNCION PARA SUBIR EVIDENCIAS


//------RUTAS DE PRUEBA
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


Route::get('login','PersonaController@showLoginForm')->name('login');

Route::post('formulario_datos','PersonaController@iniciarSesion')->name('validar_usuario');



