<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $primaryKey = "id_datper";

    protected $table = "datos_personales";

    protected $fillable=[
      "telefono",
      "domicilio",
      "religion",
      "estado_civil",
      "lug_nac",
      "lug_res",
      "escolaridad",
      "actividad_economica",
      "carrera_id",
      "persona_codigo",
      "email",
      "semestre"
    ];

    public function persona(){
        return $this->belongsTo(Persona::class,'persona_codigo','codigo');
    }

    public function datosContacto(){
        return $this->hasOne(DatosContacto::class,'datos_personales_id_datper','id_datper');
    }

    public function carrera(){
        return $this->hasOne(Carrera::class,'id','carrera_id');
    }
}
