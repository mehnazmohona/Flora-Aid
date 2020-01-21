<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use File;
use App\product;

class ProductController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

  public function new(){
return view('new');

    }
    public function storeProduct(Request $request){
    

	    $product = new product();
	    $product->retailerID = Auth::user()->id;
	    $product->productName = $request->productName;
	    $product->productType = $request->productType;
	    $product->productQuentity = $request->productQuentity;
		$product->price = $request->price;
		$product->phone = $request->phone;
		$product->company = $request->company;
		$product->description = $request->description;
	    
	    
	    //insert images also
	    if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $img = time() . '.'. $image->getClientOriginalExtension();
	        $location = public_path('userInterface/product/' .$img);
	        Image::make($image)->save($location);
	        $product->image = $img;
	    }
	    
	    $product->save();

	    session()->flash('success', 'A New Item has Added successfully !!');
	    return back();
	    }

	 //own product delete
	    
	public function productDestroy($id)
    
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
	//Own Product List view function
    public function ownProduct(){
    	$ownProduct = product::orderBy('id','desc')->where('retailerID',Auth::user()->id)->get();
        return view('own-product',compact('ownProduct'));
    }


}
