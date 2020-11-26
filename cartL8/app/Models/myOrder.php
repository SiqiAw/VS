<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function payment() {
        return $this->hasOne('App\Models\Payment');
    }
}
