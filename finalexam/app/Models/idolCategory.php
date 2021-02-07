<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class idolCategory extends Model
{
    //
    protected $fillable=['name'];  // enable use upadate the field

    public function idol(){
        return $this->hasMany('App\Models\idol');
    }
}
