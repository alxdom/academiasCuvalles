<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
  protected $table = 'academias';

  protected $primaryKey = 'id';
  protected $fillable = [
    "nombre"
  ];
  public $timestamps = false;



  public function materia()
  {
    return $this->HashMany('App\Materia');
    // return $this->belongsToMany(Materia::class,'id_academias','id');
  }
}
