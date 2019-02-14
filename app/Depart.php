<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{
    //
    public function product(){
      $this->belongsTo('App\products');
    }
}
