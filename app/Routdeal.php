<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routdeal extends Model
{
    //
    public function deal(){
     return $this->hasOne('App\Dealing');
    }
}
