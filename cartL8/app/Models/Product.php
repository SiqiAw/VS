<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    
    protected $fillable=['name','description','price','image','quantity','categoryID'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function myCart() {
       return $this->belongsTo('App\Models\myCart');
    }
}
