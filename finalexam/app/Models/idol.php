<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class idol extends Model
{
    //
    protected $fillable=['name','description','image','categoryID'];

    public function idolCategory(){
        return $this->belongsTo('App\Models\idolCategory');
    }
}
