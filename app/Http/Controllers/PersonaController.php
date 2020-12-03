<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Persona;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\SiiauServices;
use App\Http\Requests\LoginRequest;


class PersonaController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function iniciarSesion(LoginRequest $request){

            $RegisterCodeUser = User::firstOrCreate(['codigo' => $request->codigo]);

            $codigo = $request->codigo;
            $pass = $request->pass;

            $respuesta = $this->siiauServices->getAuthorizeResponse($codigo, $pass);
            
        if (property_exists($respuesta, 'authorized') == true) {
            /*Auth::loginUsingId( $request->codigo );
            session()->regenerate();*/
            return redirect()->route('home');
        }else {
            return redirect()->route('login')->with('error','El correo o contraseña son incorrectos.');
        }
    }

    /*public function log(LoginRequest $request){
        $respuesta = SiiauService::verifica_datos($request['codigo'],$request['pass']);
        if($respuesta){
            $persona = Persona::with('datosPersonales','datosPersonales.datosContacto','datosPersonales.carrera')->where('codigo',$request['codigo'])->first();
                return redirect()->route('home', compact('persona'));
            }else{
                return redirect()->route('login')->with('error','El correo o contraseña son incorrectos.');
            }
    }*/
}
