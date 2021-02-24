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
// use Illuminate\Http\Request;


class PersonaController extends Controller
{

    public function showLoginForm(){
        return view('auth.login');
    }

    public function iniciarSesion(LoginRequest $request){

        $request->validate([
            'codigo' => 'required',
            'pass' => 'required',
          ]);


        $codigo = $request->codigo;
        $pass = $request->pass;
        $respuesta = $this->siiauServices->getAuthorizeResponse($codigo, $pass);
        $findUser = User::where('codigo', $codigo)->first();
        
            if (property_exists($respuesta, 'authorized')) {
                if($findUser){
                    Auth::login($findUser);
                }else{
                    $user = new User;
                    $user->codigo = $codigo;
                    $user->pass = bcrypt($pass);
                    //Crear usuario
                    $user->save();
                    //Asignar rol a usuario
                    $user->assignRole('Academic');
                    Auth::login($user);
                }
                return redirect()->route('home');
            }else {
                // return redirect()->route('login')->with('error','Tu código o contraseña son incorrectos.');
                return redirect()->route('login');
        }
    }
}

