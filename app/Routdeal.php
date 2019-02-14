<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routdeal extends Model
{
    //
    public function deal(){
      $this->hasOne('App\Dealing');
    }
}
