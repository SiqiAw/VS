<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $fillable = ['creditCard'];

    public function myOrder() {
        return $this->belongsTo('App\Models\myOrder');
    }
}
