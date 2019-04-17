<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartitem extends Model
{
    //
    protected $fillable = ['product','cartid','count'];
    public function cart()
    {
        return $this->belongsTo('App\Post','cartid','id');
    }
    public function prod()
    {
        return $this->hasOne('App\Product','id','product');
    }
}
