<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vtype extends Model
{
    public function vname() {
        return $this->hasMany('App\Vname', 'vtypes_id', 'id');
    }
}
