<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Order;
use Auth;
use App\product;
use App\Setting;


class CheckoutsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('checkouts');
    }


    public function store(Request $request)
    {
      $this->validate($request, [
      'name'  => 'required',
      'phone_no'  => 'required',
      'shipping_address'  => 'required',
    ]);

    $order = new Order();

    $order->retailerID = $request->retailerID;
    $order->name = $request->name;
    $order->email = $request->email;
    $order->phone_no = $request->phone_no;
    $order->shipping_address = $request->shipping_address;
    $order->message = $request->message;
    $order->ip_address = request()->ip();
    if (Auth::check()) {
      $order->user_id = Auth::id();
    }

    $order->save();

    foreach (Cart::totalCarts() as $cart) {
      $cart->order_id = $order->id;
      $cart->save();
    }

    session()->flash('success', 'Your order has taken successfully !!! Please wait admin will soon confirm it.');
    return view('order-confirm');
  }


}
