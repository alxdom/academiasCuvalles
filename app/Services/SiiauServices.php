<?php

namespace App\Services;
use App\Traits\ConsumesExternalServices;
use App\Traits\AuthorizesSiiauRequest;
use App\Traits\InteractWithSiiauResponses;


class SiiauServices{

    use ConsumesExternalServices, AuthorizesSiiauRequest, InteractWithSiiauResponses;

    protected $baseUri;
    protected $codigo;
    protected $password;

    public function __construct(){
        $this->baseUri = config('services.siiau.base_uri');
    }


    public function getMateriasPorProfesor($id){
        return $this->makeRequest('GET', "api_horarios/materias_profesor/{$id}");
    }

    // public function getMaterias(){
    //     return $this->makeRequest('GET', "api_horarios/materias");
    // }


    public function getMateriasNRC($id){
        $materias = $this->makeRequest('GET', "api_horarios/materias_profesor/{$id}");
        foreach ($materiasData as $mt) {
            return $mt->nrc;
        }
    }


    public function getAuthorizeResponse($codigo, $pass){
        
        $queryParams = [
            'codigo' => $codigo,
            'pass' => $pass,
        ];
        $authorize = $this->makeRequest('POST', "d_alum/api/login", $queryParams);
        
        return $authorize;
    }
}
