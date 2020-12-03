<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;
use SoapClient;
use GuzzleHttp\Client;

class SiiauLogin{


    public static function verifica_datos($usuario,$pass){
        $authorized = false;
        $key = 'UdGSIIAUWebServiceValidaUsuario';


        $file = public_path('siiauwebservice.xml');

        try{
            $loginSiiau = new \SoapClient($file);//public_path('siiauwebservice.xml')
            $respuesta = $loginSiiau->valida($usuario,$pass,$key);
            $response = array();



            $authorized = self::validaRespuesta($respuesta);

            $response['response']=$authorized;


            if ($authorized){
                $response['authorized']=$authorized;
                $response['type']=self::divideRespuesta($respuesta)["tipo"];

                $authorized = $response;
            }

        }catch (\Exception $e){
            return $e->getMessage();

        }
        return $authorized;
    }


    private static function validaRespuesta($respuesta){
        return strlen($respuesta)>2;
    }

    private static function divideRespuesta($respuesta){
        $partes = explode(",",$respuesta);

        return array("tipo"=>$partes[0]);
    }
}
