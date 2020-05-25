<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $primaryKey = "codigo";
    public $incrementing = false;
    protected $table = "usuarios";

    protected $fillable = [
        "codigo",
        'apaterno',
        'amaterno',
        'nombre',
        'tipo',
        'fec_nac',
        'sexo'
    ];

    public function datosPersonales(){
        return $this->hasOne(DatosPersonales::class,'persona_codigo','codigo');
    }
}
