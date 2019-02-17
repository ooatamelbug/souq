<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealing extends Model
{
    //
    public function routed(){
      return $this->belongsTo('App\Routdeal');
    }
}
