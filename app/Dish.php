<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //RELATIONS------with Order(n:n)

    public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
