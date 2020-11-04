<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zona extends Model
{
    public function carrusel(){
        return $this->belongsTo('App\Carrusel');
    }
}
