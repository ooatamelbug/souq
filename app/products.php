<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
  public function users(){
    return $this->belongsTo('App\User');
  }//
public function desctipion(){
  return $this->belongsTo('App\Details');
}
  public function images(){
    return $this->hasMany('App\Images');
  }
  public function depart(){
    return $this->hasOne('App\Depart');
  }
  public function part(){
    return $this->hasOne('App\Part');
  }
}
