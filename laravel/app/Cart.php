<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Cart extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['user','checked'];
    protected $softDelete = true;
    public function cartitem()
    {
        return $this->hasMany('App\Cartitem','cartid','id');
    }
}
