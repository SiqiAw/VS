<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\idol; 
use App\Models\idolCategory;
Use Session;
//Use Auth;
//use Illuminate\Pagination\LengthAwarePaginator;


class IdolController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    
    public function index()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $data = Product::select("name")
                ->where("name","LIKE", '%'.$request->get('query').'%')
                ->get();
        return response()->json($data);
    }

    public function clientShow() {
        $products=Product::paginate(3);

        return view('clientProduct')->with('products',$products);
    }

    public function showProductDetail($id){
       
        $products =Product::all()->where('id',$id);
        //select * from products where id='$id'
        
        return view('productDetail')->with('products',$products)
                                ->with('categories',Category::all());
    }
    */

    public function create(){
        return view('insertIdol') ->with('idolcategories',idolCategory::all());
    }


    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $image=$r->file('idol-image');   //step to upload image get the file input
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName();

        $addCategory=idol::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            'description'=>$r->description,
            'categoryID'=>$r->category,
            'image'=>$imageName,
            
        ]);
        Session::flash('success',"Idol create succesful!");

        return redirect()->route('showIdol');
    }

    public function show(){
        $idols=idol::paginate(4);
       
        return view('showIdol')->with('idols',$idols); // db table name, variable
    }

    public function edit($id){
       
        $idols=idol::all()->where('id',$id);
        //select * from products where id='$id'
        
        return view('editIdol')->with('idols',$idols)
                               ->with('idolcategories',idolCategory::all());
    }

    public function delete($id){
        $idols=idol::find($id);
        $idols->delete();
        return redirect()->route('showIdol');
    }

    public function update(){
        $r=request();//retrive submited form data
        $idols=idol::find($r->ID);  //get the record based on product ID      
        if($r->file('idol-image')!=''){
            $image=$r->file('idol-image');        
            $image->move('images',$image->getClientOriginalName()); // images is the location               
            $imageName=$image->getClientOriginalName(); 
            $products->image=$imageName;
            }         
        $idols->name=$r->name; // name from edit page
        $idols->description=$r->description;
        $idols->categoryID=$r->category;
        $idols->save(); //run the SQL update statment
        return redirect()->route('showIdol');
    }

    public function search(){
        $r=request();//retrive submited form data
        $keyword=$r->searchIdol;
        $idols=DB::table('idols')
        ->leftjoin('idol_categories', 'idol_categories.id', '=', 'idols.categoryID') // database table name
        ->select('idol_categories.name as catname','idol_categories.id as catid','idols.*')
        ->where('idols.name', 'like', '%' . $keyword . '%')
        ->orWhere('idols.description', 'like', '%' . $keyword . '%')
        //->get();
        ->paginate(3); //paginate(how many item want to show/page)
               
        return view('showIdol')->with('idols',$idols);
    }
}