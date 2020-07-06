<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{

    

    protected $table = 'academias';

    protected $primaryKey = 'id';
    public $timestamps = false;
    public function materia(){
        return $this->HashMany('App\Materia');
    }
}
