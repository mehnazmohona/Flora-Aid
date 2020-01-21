<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Cart;
use App\product;
use App\User;
use App\Order;
use DB;

class AccountController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    
 //Orders view function 
    public function orders(){

        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();


        $orders = DB::table('carts')
                  ->join('orders','carts.order_id','=','orders.id')
                  ->join('users','carts.user_id','=','users.id')
                  ->join('products','carts.product_id','=','products.id')
                  ->select('carts.product_quantity','carts.order_id','orders.name','orders.phone_no','products.productName','products.price')
                  ->where('carts.user_id',Auth::user()->id)
                  ->orWhere('orders.retailerID',Auth::user()->id)
                  ->get();
                  

                  
        return view('orders',compact('orders'));
    }
//Order view function
    public function order(){
        return view('order');
    }
//account view function 
    public function account(){
        $datas = DB::table('retailers')->where('userID',Auth::User()->id)->get();
        $datastwo = DB::table('gardeners')->where('userID',Auth::User()->id)->get();
    
        return view('account',compact('datas','datastwo'));
    }

//Store Product view function
    public function storeProduct(){
        return view('store-product');
    }
}
