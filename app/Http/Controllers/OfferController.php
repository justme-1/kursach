<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class OfferController extends Controller
{
    public function index(){
        $subjects=Subject::where('checked',1)->get();
        return view('offer')->with(['subjects'=>$subjects]);
    }
    public function object(Request $Request,$id=null){
        if($id) {
            $subject = Subject::find($id);
            return view('object')->with(['subject' => $subject]);
        }
        return redirect('/offer');
    }
}
