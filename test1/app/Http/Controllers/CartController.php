<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\myCart;
use Session;
use Auth;

class CartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {

        $r = request();
        $addCategory = myCart::create([

            'orderID' => '',
            'productID' => $r->id,
            'userID' => Auth::id(),

        ]);
        Session::flash('success', "Product add successful!");
        return redirect()->route('products');
    }

    public function showMyCart()
    {
        $carts = DB::table('my_carts')
            ->leftjoin('products', 'products.id', '=', 'my_carts.productID')
            ->select('my_carts.id as cid' ,'products.*')
            ->where('my_carts.orderID', '=', '') //'' haven't make payment
            ->where('my_carts.userID', '=', Auth::id())
            ->paginate(12);

        return view('myCart')->with('carts', $carts);
    }

    
    public function delete($id){
       
        $carts =myCart::find($id);
        $carts->delete();
        return redirect()->route('show.myCart');

    }


}
