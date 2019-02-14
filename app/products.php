<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
  public function users(){
    $this->belongsTo('App\User');
  }
  public function images(){
    $this->hasMany('App\Images');
  }
  public function depart(){
    $this->hasOne('App\Depart');
  }
  public function part(){
    $this->hasOne('App\Part');
  }
}
