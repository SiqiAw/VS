<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    //
    protected $fillable=['quantity'];  // enable use upadate the field

    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
