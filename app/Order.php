<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //RELATIONS------with Dish (n:n)
    public function dishes(){
        return $this->belongsToMany('App\Dish');
    }
}
