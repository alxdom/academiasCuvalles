<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Services\SiiauService;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class PersonaController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {

    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function iniciarSesion(LoginRequest $request){
        $respuesta = SiiauService::verifica_datos($request['codigo'],$request['pass']);
        //dd($request['codigo'],$request['pass']);
        if($respuesta){
             
             /*return view('layouts.profile',compact('persona'));*/
             return redirect()->route('home', compact('persona'));
             
        }else{
            return redirect()->route('login')->with('error','El correo o contraseña son incorrectos.');
        }


    }

    /*public function mostrarFormulario(){
        return view('layouts.formulario');
    }*/


    public function store(Request $request)
    {
        //
    }

    public function show(Persona $persona)
    {
        //
    }


    public function edit(Persona $persona)
    {
        //
    }

    public function update(Request $request, Persona $persona)
    {
        //
    }

    public function destroy(Persona $persona)
    {
        //
    }
}
