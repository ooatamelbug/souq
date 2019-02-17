<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    public function productto()
    {
        return $this->hasOne('App\products');
    }
}
