<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AWB extends Model
{
    //
    protected $fillable=['courierName'];

    public function MyOrder(){
        return $this->hasOne('App\Models\MyOrder');
    }
}
