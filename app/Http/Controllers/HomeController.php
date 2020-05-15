<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Image;
use App\Subject;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()) {
            return view('homeProfile')->with(['user'=>Auth::user()]);
        }else{
            return redirect()->route('index');
        }
    }
    public function objects()
    {
        if(Auth::check()) {
            $subjects=Subject::where('user_id',Auth::user()->id)->get();
            return view('homeSubjects')->with(['subjects'=>$subjects]);

        }else{
            return redirect()->route('index');
        }
    }
    public function object($id)
    {
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
        if(Auth::check()) {

            $subject=Subject::find($id);
            $subject->price=$request->price;
            $subject->lat=$request->lat;
            $subject->long=$request->long;
            $subject->description=$request->description;
            if($request->image!=""){
                $image = $request->file('image');
                $avatarName = $image->getClientOriginalName();
                $image->move(public_path('image'),$avatarName);
                $image=json_decode($subject->images,true);
                array_push($image,$avatarName);

                $subject->images = json_encode($image);
            }

            $subject->save();
            return view('homeSubject')->with(['subject'=>$subject]);

        }else{
            return redirect()->route('index');
        }
    }
    public function addObjectPage(Request $request){
        if(Auth::check()) {


            return view('homeAddSubject');

        }else{
            return redirect()->route('index');
        }
    }

    public function addObject(Request $request)
    {
        if(Auth::check()) {

            $subject=new Subject();
            $subject->price=$request->price;
            $subject->lat=$request->lat;
            $subject->long=$request->long;
            $subject->description=$request->description;
            if($request->image!=""){
                $image = $request->file('image');
                $avatarName = $image->getClientOriginalName();
                $image->move(public_path('image'),$avatarName);

                $subject->images = json_encode(['k1'=>'/image/'.$avatarName]);
            }

            $subject->save();
            return view('homeAddSubject');

        }else{
            return redirect()->route('index');
        }
    }


    public function deleteObject(Request $request,$id)
    {
        if(Auth::check()) {

            $subject=Subject::where('id',$id)->delete();

            return view('homeSubject')->with(['subject'=>$subject]);

        }else{
            return redirect()->route('index');
        }
    }

    public function logOut()
    {
        if(Auth::check()) {
            Auth::logout();
            return redirect()->route('index');
        }
        return redirect()->route('index');
    }
    public function updateUserData(Request $request)
    {
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
