<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\contact;

class ContactController extends Controller
{
    //contact view function
    public function contact(){
    	return view('contact');
    }

    //contact message function
    public function send(Request $request){
        $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'message' => 'required',

    ],
    [
      'name.required'  => 'Please Provide a name',
      'email.required'  => 'Please Provide email',
      'message.required'  => 'Please Provide message',
    ]);

    $message = new contact();
    $message->name = $request->name;
    $message->email = $request->email;
    $message->message = $request->message;

    
    $message->save();

    session()->flash('success', 'Your Message Send successfully !!');
    return redirect()->route('contact');
    }
}
