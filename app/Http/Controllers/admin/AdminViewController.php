<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\contact;

class AdminViewController extends Controller
{	
	public function __construct()
      {
        $this->middleware('auth:admin');
      }
      
    public function index(){
    	return view('admin.index');
    }

    //contact
    public function message(){
    	$message = contact::orderBy('id','desc')->get();
    	return view('admin.message',compact('message'));
    }
}
