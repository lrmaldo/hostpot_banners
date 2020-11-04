<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
  protected $primaryKey = 'id';


   public function zona(){
       return $this->hasOne(zona::class,'id','zona_id');
   }
}
