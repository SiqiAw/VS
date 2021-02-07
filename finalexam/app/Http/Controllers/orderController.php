<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\MyOrder;
use App\Models\AWB;
use Session;

class orderController extends Controller
{
    //
    public function create(){
        return view('insertOrder') ->with('a_w_b_s',AWB::all());
    }

    public function store(){    //step 2 
       
        $r=request();
        $addCategory=MyOrder::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'customerID'=>$r->cid,
            'receiverName'=>$r->receiverName, //fullname from HTML
            'address'=>$r->address,
            'postCode'=>$r->postCode,
            'courierID'=>$r->courierID,
            
        ]);
        Session::flash('success',"Order create succesful!");

        return redirect()->route('showOrder');
    }

    public function show(){
        $myorders=MyOrder::paginate(12);
       
        return view('showOrder')->with('my_orders',$myorders); // db table name, variable
    }

}
