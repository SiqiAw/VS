<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyOrder extends Model
{
    //
    protected $fillable=['customerID','receiverName','address','postCode','courierID'];

    public function AWB(){
        return $this->hasOne('App\Models\AWB');
    }

}
