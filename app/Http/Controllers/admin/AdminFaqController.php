<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\faq;

class AdminFaqController extends Controller
{

    public function __construct()
      {
        $this->middleware('auth:admin');
      }

    public function faqView(){
    	return view('admin.faq');
    }


    public function faqPost(Request $request){

      $faq = new faq();

      $faq->title = $request->title;
      
      $faq->description = $request->description;
      
      $faq->save();

      session()->flash('success', 'A New FAQ Added Successfully !!');
      return back();
      }



    public function faqManage(){
    	$faqs = faq::orderBy('id','desc')->get();

    	return view('admin.manage-faq',compact('faqs'));
    }

    public function faqEdit($id){

    $faqs= faq::find($id);
    if (!is_null($faqs)) {
      return view('admin.faq-edit', compact('faqs'));
    }else {
      return back();
    }

    }


    public function faqUpdate(Request $request, $id)
    {

      $faqs = faq::find($id);
      $faqs->title = $request->title;
      $faqs->description = $request->description;
      $faqs->save();

      session()->flash('success', 'FAQ us has updated successfully !!');
      return redirect()->route('admin-manage-faq');

    }

    
    public function faqDelete($id)
  {
      $faq = faq::find($id);
      if (!is_null($faq)) {
        $faq->delete();
      }
      session()->flash('success', 'FAQ deleted successfully !!');
      return back();

    }

    

}
