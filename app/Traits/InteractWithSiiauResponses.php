<?php

namespace App\Traits;

trait InteractWithSiiauResponses
{

    public function decodeResponse($response){

        //$encode = json_encode($response , JSON_FORCE_OBJECT);
        //$decodeResponse = json_decode($encode, true);
        
        $decodeResponse = json_decode($response);

        //return $decodeResponse->data;

        return $decodeResponse;

    }

    public function checkIfErrorResponse($response){
        if (isset($response->error)) {

            throw new \Exception("Something failed: {$response->error}");
            
        }
    }
       
}