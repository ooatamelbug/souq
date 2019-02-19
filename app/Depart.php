<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{
    //
    public function product(){
      return $this->hasOne('App\products','fordepart');
    }
}
