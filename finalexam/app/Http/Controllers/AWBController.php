<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AWB; 

class AWBController extends Controller
{
    //
    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addCategory=AWB::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'courierName'=>$r->cname, //fullname from HTML
            
        ]);
        
        Return view('insertOrder');// step 5 back to last page
    }


    public function show(){
        $couriers=AWB::all();//instead SQL select * from categories
        return view('showCourier')->with('a_w_b_s',$couriers);
    }
}
