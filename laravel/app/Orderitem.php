<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    //
    protected $fillable = ['product','order','qty'];
    public function order()
    {
        return $this->belongsTo('App\Post','order','id');
    }
    public function prod()
    {
        return $this->hasOne('App\Product','id','product');
    }

}
