<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = ('/');

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Create a new controller instance.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */

    public function login(Request $request)
    {

        $input = $request->all();

        $this->validate($request, [

            'codigo' => 'required',

            'password' => 'required',

        ]);


        $fieldType = filter_var($request->codigo, FILTER_VALIDATE_EMAIL) ? 'email' : 'codigo';

        if (auth()->attempt(array($fieldType => $input['codigo'], 'password' => $input['password']))) {

            return redirect()->route('login');

        }else {
            return redirect()->route('home')->with('error','El correo o contraseña son incorrectos.');
        }

    }

}
