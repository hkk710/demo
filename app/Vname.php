<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vname extends Model
{
    public function vtype() {
        return $this->belongsTo('App\Vtype', 'vtypes_id', 'id');
    }
    public function prathishta() {
        return $this->belongsTo('App\Prathishta', 'prathishtas_id', 'id');
    }
}
