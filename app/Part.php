<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    //
    public function product(){
      $this->belongsTo('App\products');
    }
}
