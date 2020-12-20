<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Student;
use Session;

class StudentController extends Controller
{
    //
    public function store(){    
        $r=request(); 
        $image = $r->file('student-image');
        $image->move('images', $image->getClientOriginalName());   //images is the location                
        $photoName=$image->getClientOriginalName();

        $addCategory=Student::create([    
            'stuID'=>$r->ID, 
            'stuName'=>$r->stuName, 
            'stuEmail'=>$r->stuEmail,
            'stuAddress'=>$r->stuAddress,
            'stuPhoto'=>$photoName,
            'stuPhone'=>$r->stuPhone,
            
        ]);
        Session::flash('success',"Student add succesful!");
        
        return redirect()->route('showStudent');
    }

    public function show(){
        $students=Student::all();
        return view('showStudent')->with('students',$students);
    }

}
