<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = ['rate','review','user','product'];
    
    public function product(){
        return $this->belongsTo('App\Product','product','id');
    }
      public function reviewer(){
        return $this->belongsTo('App\User','user','id');
    }
}
