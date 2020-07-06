<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $primaryKey = 'crn';
    protected $fillable = ['clave, nombre, carreras_id, academias_id'];

    public $timestamps = false;

    public function academia(){
        return $this->belongsTo('App\Academia','academias_id');
    }
}
