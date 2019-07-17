<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function estudiantes(){
        return $this->hasMany('App\Estudiante');
     }
     
}
