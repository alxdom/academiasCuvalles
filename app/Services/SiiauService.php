<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;
use SoapClient;

class SiiauService{


    public static function verifica_datos($usuario,$pass){
        $authorized = false;
        $key = 'UdGSIIAUWebServiceValidaUsuario';


        $file = public_path('siiauwebservice.xml');

        try{
            $loginSiiau = new \SoapClient($file);//public_path('siiauwebservice.xml')
            $respuesta = $loginSiiau->valida($usuario,$pass,$key);
            $authorized = self::validaRespuesta($respuesta);
        }catch (\Exception $e){
            return $e->getMessage();

        }
        return $authorized;
    }


    private static function validaRespuesta($respuesta){
        return strlen($respuesta)>2;
    }
}
