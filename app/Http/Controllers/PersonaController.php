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
        // $user = $request->all();

        // $codigo = $request->codigo;
        // $pass = $request->pass;

        // $respuesta = $this->siiauServices->getAuthorizeResponse($codigo, $pass);
 
        // if (property_exists($respuesta, 'authorized') == true) {
          
        //     $RegisterCodeUser = User::firstOrCreate([
        //         'codigo' => $request->codigo,
        //     ]);
        //     Auth::login($user, false);
        //         return redirect()->route('home');

        //     }else {

        //         return redirect()->route('login')->with('error','El correo o contraseña son incorrectos.');

        //     }
        $codigo = $request->codigo;
        $pass = $request->pass;
        $respuesta = $this->siiauServices->getAuthorizeResponse($codigo, $pass);
        $findUser = User::where('codigo', $codigo)->first();
        
            if (property_exists($respuesta, 'authorized') == true) {
                if($findUser){
                    Auth::login($findUser);
                }else{
                    $user = new User;
                    $user->codigo = $codigo;
                    $user->pass = bcrypt($pass);
                    $user->save();
                    Auth::login($codigo);
                }
                return redirect()->route('home');
        }else {
            return redirect()->route('login')->with('error','El correo o contraseña son incorrectos.');
        }
    }
}

