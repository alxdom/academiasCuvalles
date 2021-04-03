<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    //
  protected $table = "ciclos";
  public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable = ['ciclo'];

}
