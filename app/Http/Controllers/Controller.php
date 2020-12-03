<?php

namespace App\Http\Controllers;

use App\Services\SiiauServices;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    /**
    * @var App\Services\SiiauServices
    */
    protected $siiauServices;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(SiiauServices $siiauServices){

        $this->siiauServices = $siiauServices;

    }
}
