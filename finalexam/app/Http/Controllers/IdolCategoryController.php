<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\idolCategory;   //step 1 link model (laravel 8 format)
// Use Auth;

class IdolCategoryController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    */
    
    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addCategory=idolCategory::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            
        ]);
        
        Return view('insertCategory');// step 5 back to last page
    }


    public function show(){
        $idolcategories=idolCategory::all();//instead SQL select * from categories
        return view('showIdolCategory')->with('idolcategories',$idolcategories);
    }

    public function delete($id){
        $idolcategories=idolCategory::find($id);
        $idolcategories->delete(); //apply delete from categories where id='$id'
        return redirect()->route('showCategory');
    }
    
}
