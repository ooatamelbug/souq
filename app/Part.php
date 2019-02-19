<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    //
    public function product(){
      return $this->hasOne('App\products','forpart');
    }
}
