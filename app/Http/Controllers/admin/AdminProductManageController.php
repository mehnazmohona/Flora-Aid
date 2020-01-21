<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\product;
use Image;
use File;

class AdminProductManageController extends Controller
{

    public function __construct()
      {
        $this->middleware('auth:admin');
      }
      
    public function product(){
    	$product = product::orderBy('id','desc')->get();
    	return view('admin.product',compact('product'));
    }

    
    public function productDelete($id)
  {
      $product = product::find($id);
      if (!is_null($product)) {
        // Delete brand image
        if (File::exists('userInterface/product/'.$product->image)) {
          File::delete('userInterface/product/'.$product->image);
        }
        $product->delete();
      }
      session()->flash('success', 'Product deleted successfully !!');
      return back();

    }

}
