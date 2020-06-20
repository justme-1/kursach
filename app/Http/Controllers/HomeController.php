<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Image;
use App\Subject;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function setLocale(){
        App::setLocale(session('locale'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->setLocale();
        if(Auth::check()) {
            return view('homeProfile')->with(['user'=>Auth::user()]);
        }else{
            return redirect()->route('index');
        }
    }

    public function locale($loc)
    {
        App::setLocale($loc);
        session(['locale'=>$loc]);
        return back();
    }


    public function objects()
    {
        $this->setLocale();
        if(Auth::check()) {
            $subjects=Subject::where('user_id',Auth::user()->id)->get();
            return view('homeSubjects')->with(['subjects'=>$subjects]);

        }else{
            return redirect()->route('index');
        }
    }
    public function objectsFilter(Request $request)
    {
        $this->setLocale();
        if(Auth::check()) {
//            $req=Subject::where('user_id',Auth::user()->id)
//                ->where('price','>',$request['price1'])
//                ->where('price','<',$request['price2'])
//                ->where('type_id',$request['type'])
//                ->where('rooms',$request['rooms'])
//                ->whereBetween('area',$request['area']);
            $req=Subject::where('user_id',Auth::user()->id);
            if($request['price1']){
                $req->where('price','>',$request['price1']);
            }
            if($request['price2']){
                $req->where('price','<',$request['price2']);
            }
            if($request['type']){
                $req->where('type_id',$request['type']);
            }
            if($request['rooms']){
                $req->where('rooms',$request['rooms']);
            }
            $subjects=$req->get();
            //$subjects=Subject::where('user_id',Auth::user()->id)->get();
            return view('homeSubjects')->with(['subjects'=>$subjects]);

        }else{
            return redirect()->route('index');
        }
    }

    public function object($id)
    {
        $this->setLocale();
        if(Auth::check()) {
            $subject=Subject::where('id',$id)->get();
            $subject=Subject::find($id);

            return view('homeSubject')->with(['subject'=>$subject]);

        }else{
            return redirect()->route('index');
        }
    }

    public function updateObject(Request $request,$id)
    {
        $this->setLocale();
        if(Auth::check()) {

            $subject=Subject::find($id);
            $subject->price=$request->price;
            $subject->lat=$request->lat;
            $subject->long=$request->long;
            $subject->type_id=$request->type;
            $subject->area=$request->area;
            $subject->rooms=$request->rooms;
            $subject->description=$request->description;
//            if($request->image!=""){
//                $image = $request->file('image');
//                $avatarName = $image->getClientOriginalName();
//                $image->move(public_path('image'),$avatarName);
//                $image=json_decode($subject->images,true);
//                array_push($image,$avatarName);
//
//                $subject->images = json_encode($image);
//            }
            $images = [];
            $imageBefore=json_decode($subject->images,true);
            if ($request->hasFile('image')) {
                foreach($request->file('image') as $key => $image){
                    $avatarName = $image->getClientOriginalName();
                    $image->move(public_path('image'),$avatarName);
                    $avatar="/image/".$avatarName;
                    array_push($imageBefore,$avatarName);

                }
                $subject->images = json_encode($imageBefore);
            }

            $subject->save();
            return view('homeSubject')->with(['subject'=>$subject]);

        }else{
            return redirect()->route('index');
        }
    }
    public function addObjectPage(Request $request){
        $this->setLocale();
        if(Auth::check()) {


            return view('homeAddSubject');

        }else{
            return redirect()->route('index');
        }
    }

    public function addObject(Request $request)
    {
        $this->setLocale();
        if(Auth::check()) {
            $request->validate([
                'price'=>'required|'
            ]);
            $subject=new Subject();
            $subject->price=$request->price;
            $subject->lat=$request->lat;
            $subject->type_id=$request->type;
            $subject->area=$request->area;
            $subject->rooms=$request->rooms;
            $subject->long=$request->long;
            $subject->description=$request->description;

            $imageBefore=[];
            if ($request->hasFile('image')) {
                foreach($request->file('image') as $key => $image){
                    $avatarName = $image->getClientOriginalName();
                    $image->move(public_path('image'),$avatarName);
                    $avatarName="/image/".$avatarName;
                    array_push($imageBefore,$avatarName);

                }
                $subject->images = json_encode($imageBefore);
            }

            $subject->save();
            return view('homeAddSubject');

        }else{
            return redirect()->route('index');
        }
    }


    public function deleteObject(Request $request,$id)
    {
        $this->setLocale();
        if(Auth::check()) {

            $subject=Subject::where('id',$id)->delete();

            return view('homeSubject')->with(['subject'=>$subject]);

        }else{
            return redirect()->route('index');
        }
    }

    public function logOut()
    {
        $this->setLocale();
        if(Auth::check()) {
            Auth::logout();
            return redirect()->route('index');
        }
        return redirect()->route('index');
    }
    public function updateUserData(Request $request)
    {
        $this->setLocale();
        if(Auth::check()) {
            $user=Auth::user();
            $user->email=$request->email;
            $user->name=$request->name;
            $user->phone=$request->phone;
            if($request->password!=""){
                $user->password=bcrypt($request->password);
            }
            if($request->pic!=""){
                $image = $request->file('pic');
                $avatarName = $image->getClientOriginalName();
                $image->move(public_path('image'),$avatarName);

                $user->image = $avatarName;
            }

            $user->save();
            return view('homeProfile')->with(['user'=>Auth::user()]);
        }else{
            redirect()->route('index');
        }
    }
}
