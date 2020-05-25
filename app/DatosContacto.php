<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosContacto extends Model
{
    protected $primaryKey = "id_con";

    protected $table = "contacto";

    protected $fillable=[
        "nombre",
        "domicilio",
        "telefono",
        "email",
        "parentesco",
        "datos_personales_id_datper"
    ];


    public function datosPersonales(){
        return $this->$this->belongsTo(DatosPersonales::class,"datos_personales_id_datper","id_datper");
    }
}
