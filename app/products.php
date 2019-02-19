<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
  public function users(){
    return $this->belongsTo('App\User','foruser');
  }//
public function desctipion(){
  return $this->hasOne('App\Details','forprod');
}
  public function images(){
    return $this->hasMany('App\Images', 'iamages');
  }
  public function depart(){
    return $this->belongsTo('App\Depart','fordepart');
  }
  public function part(){
    return $this->belongsTo('App\Part','forpart');
  }
  public function dealF(){
    return $this->oneToMany('App\Dealing','from_pro');
  }
  public function dealT(){
    return $this->oneToMany('App\Dealing','to_pro');
  }
}
