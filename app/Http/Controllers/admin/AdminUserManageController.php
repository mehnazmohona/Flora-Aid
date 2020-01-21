<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
// use DB;

class AdminUserManageController extends Controller
{

	public function __construct()
      {
        $this->middleware('auth:admin');
      }
      
    public function retailer(){
    	$retailer = User::orderBy('id','desc')->where('type','Retailer')->get();

        // $retailer = DB::table('users')
        //     ->leftJoin('retailers', 'users.id', '=', 'retailers.userID')
        //     ->select('*')
        //     ->get();

    	return view('admin.retailer',compact('retailer'));
    }

    public function gardener(){
    	$gardener = User::orderBy('id','desc')->where('type','Gardener')->get();
    	return view('admin.gardener',compact('gardener'));
    }

    // public function destroy($id)
    // {
    //     $user = User::find($id);
    // if (!is_null($user)) {
    //   $user->delete();
    // }else {
    //   return redirect()->route('carts');
    // }
    // session()->flash('success', 'User has deleted !!');
    // return back();
    // }
}
