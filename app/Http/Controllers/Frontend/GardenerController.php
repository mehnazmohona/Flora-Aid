<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\gardener;
use DB;


class GardenerController extends Controller
{
    public function infopost(Request $request){
    	$this->validate($request, [
      'phone' => 'required',
      'division' => 'required',
      'zipcode'	=> 'required',
      'country'  => 'required',
      'street' => 'required',
      
	    ],
	    [
	      'phone.required'  => 'Please Provide a phone numebr',
	      'division.required'	=> 'Please Provide a division',
	      'zipcode.required'  => 'Please Give a zipcode',
	      'country.required'  => 'Please Give a country',
	      'street.required'  => 'Please Give a street',
	      
	    ]);
	    
	    $userID = $request->userID;
          //dd($userID);
	    $id = 0;
          $data = DB::table('gardeners')->where('userID',$userID)->get();
          foreach($data as $dd){
            $id = $dd->userID;
          }
          //dd($id);
          if (Auth::user()->id == $id) {
    		$updatePro = DB::table('gardeners')
            ->where('userID', Auth::user()->id)
            ->update(['phone' => $request->phone,'division' => $request->division, 'zipcode'=>$request->zipcode,'country'=> $request->country,'street' =>$request->street]);
    	}
    	else{
	    $gardenInfo = new gardener();
	    $gardenInfo->userID = Auth::user()->id;
	    $gardenInfo->phone = $request->phone;
	    $gardenInfo->division = $request->division;
	    $gardenInfo->zipcode = $request->zipcode;
	    $gardenInfo->country = $request->country;
	    $gardenInfo->street = $request->street;
	    

	    $gardenInfo->save();
	}

	    session()->flash('success', 'Your Profile Update successfully !!');
	    return back();

	    }


}
