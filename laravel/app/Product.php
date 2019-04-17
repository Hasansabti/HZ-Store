<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function cat()
    {
        return $this->belongsTo('App\Category','category','id');
    }
    
    public function reviews(){
        return $this->hasMany('App\Review','product','id');
    }
}
