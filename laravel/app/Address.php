<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
	 protected $fillable = ['user','fname','lname','address1','address2','code','phone'];
	 
	       public function user(){
        return $this->belongsTo('App\User','user','id');
    }
}
