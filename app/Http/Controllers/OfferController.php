<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App;
class OfferController extends Controller
{
    public function setLocale(){
        App::setLocale(session('locale'));
    }

    public function index(){
        $this->setLocale();
        $subjects=Subject::where('checked',1)->paginate(8);
        return view('offer')->with(['subjects'=>$subjects]);
    }
    public function objectsFilter(Request $request)
    {
        $this->setLocale();
//            $req=Subject::where('user_id',Auth::user()->id)
//                ->where('price','>',$request['price1'])
//                ->where('price','<',$request['price2'])
//                ->where('type_id',$request['type'])
//                ->where('rooms',$request['rooms'])
//                ->whereBetween('area',$request['area']);
            $req=Subject::where('checked',1);
            if($request['price1']){
                $req->where('price','>',$request['price1']*1);
            }
            if($request['price2']){
                $req->where('price','<',$request['price2']*1);
            }
            if($request['type']!='Выбирете тип'){
                $req->where('type_id',$request['type']*1);
            }
            if($request['rooms']!='Выбирете кол-во комнат'){
                $req->where('rooms',$request['rooms']*1);
            }
            $subjects=$req->get();
            //$subjects=Subject::where('user_id',Auth::user()->id)->get();
            return view('offer')->with(['subjects'=>$subjects]);
        }

    public function ajax(Request $request)
    {

        $req=Subject::where('checked',1);
        if($request['price1']){
            $req->where('price','>',$request['price1']*1);
        }
        if($request['price2']){
            $req->where('price','<',$request['price2']*1);
        }
        if($request['type']!='Выбирете тип'){
            $req->where('type_id',$request['type']*1);
        }
        if($request['rooms']!='Выбирете кол-во комнат'){
            $req->where('rooms',$request['rooms']*1);
        }
        $count=$req->count();
        $sub=$req->get();
        //$subjects=Subject::where('user_id',Auth::user()->id)->get();
        echo json_encode(array('count'=>$count,"subjects"=>$sub),7);
    }


    public function object(Request $Request,$id=null){
        $this->setLocale();
        if($id) {
            $subject = Subject::find($id);
            return view('object')->with(['subject' => $subject]);
        }
        return redirect('/offer');
    }
}
