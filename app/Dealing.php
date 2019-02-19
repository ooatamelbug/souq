<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealing extends Model
{
    //
    public function routed(){
      return $this->belongsTo('App\Routdeal','fordeal');
    }
    public function productF(){
      return $this->belongsTo('App\products','from_pro');
    }public function productT(){
      return $this->belongsTo('App\products','to_pro');
    }
}
