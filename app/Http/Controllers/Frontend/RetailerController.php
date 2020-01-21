<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\retailer;
use DB;

class RetailerController extends Controller
{
    public function rinfopost(Request $request){

    	$this->validate($request, [
      'companyName' => 'required',
      'phone' => 'required',
      'division' => 'required',
      'zipcode'	=> 'required',
      'country'  => 'required',
      'street' => 'required',
      
	    ],
	    [
	      'companyName.required' => 'Please Select Your Country',
	      'phone.required'  => 'Please Provide  phone numebr',
	      'division.required'	=> 'Please Provide a division',
	      'zipcode.required'  => 'Please Give a zipcode',
	      'country.required'  => 'Please Give a country',
	      'street.required'  => 'Please Give a street',
	      
	    ]);
	    // $val = DB::table('retailers')->where('userID',Auth::User()->id)->get();
    		$userID = $request->userID;
          //dd($userID);
    		$id = 0;
          $data = DB::table('retailers')->where('userID',$userID)->get();
          foreach($data as $dd){
            $id = $dd->userID;
          }
          //dd($id);
          if (Auth::user()->id == $id) {

	    // $data = 0;
     //    $val = DB::table('retailers')->get();
     //    foreach ($val as $key) {
     //        $data = $key->userID;
     //    }
     //    if (Auth::user()->id == $data) {
    	// if (Auth::user()->id == $val) {
    		$updatePro = DB::table('retailers')
            ->where('userID', Auth::user()->id)
            ->update(['companyName' => $request->companyName, 'phone' => $request->phone,'division' => $request->division, 'zipcode'=>$request->zipcode,'country'=> $request->country,'street' =>$request->street]);
    	}
    	else{

	    $retailerInfo = new retailer();
	    $retailerInfo->userID = Auth::user()->id;

	    $retailerInfo->companyName = $request->companyName;
	    $retailerInfo->phone = $request->phone;
	    $retailerInfo->division = $request->division;
	    $retailerInfo->zipcode = $request->zipcode;
	    $retailerInfo->country = $request->country;
	    $retailerInfo->street = $request->street;
	    
	    $retailerInfo->save();
	   }
	
	    session()->flash('success', 'Your Profile Update successfully !!');
	    return back();

	    }
}
