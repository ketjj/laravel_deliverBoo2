<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //RELATIONS-------------with user(n:n)

    public function users(){
        return $this->belongsToMany('App\User');
      }
}
