<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
Use File;
use App\product;
use App\faq;

class ViewController extends Controller
{

//welcome Home page view function
    public function index(){
        $products = product::orderBy('id','desc')->limit(8)->get();
    	return view('welcome',compact('products'));
    }

//Frequentlly ask question or Tips view function
    public function faq(){
        $faqs = faq::orderBy('id','desc')->get();
    	return view('faq',compact('faqs'));
    }
//products view function
    public function products(){
        $products = product::orderBy('id','desc')->get();
    	return view('products',compact('products'));
    }
//products details view function
    public function productsDetails($id){
        $products = product::find($id);
    	return view('products-details',compact('products'));
    }


//order confirm view function
    public function orderConfirm(){
    	return view('order-confirm');
    }

//search view function
    public function search(Request $request)
    {

        $search = $request->search;

        $products = product::orWhere('productName', 'like', '%'.$search.'%')
        ->orWhere('productType', 'like', '%'.$search.'%')
        ->orWhere('company', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->get();
        return view('search', compact('search', 'products'));
    }

}
