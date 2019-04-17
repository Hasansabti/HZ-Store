<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = ['tracking','user'];
    public function items()
    {
        return $this->hasMany('App\Orderitem','order','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user');
    }

  
}
