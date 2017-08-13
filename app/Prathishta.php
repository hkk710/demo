<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prathishta extends Model
{
    public function vnames() {
        return $this->hasMany('App\Vname');
    }
}
