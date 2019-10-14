<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes_particular extends Model
{

    public function contacto(){
        return $this->hasMany('App\Contacto');
    }
}
