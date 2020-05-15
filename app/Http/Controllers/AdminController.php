<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Gate;
use App\News;
use App\Subject;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
       if(Gate::allows('admin-enter')){
           return view('admin.admin');
       }
        return view('index');
    }


    public function news(){
        if(Gate::allows('admin-enter')){
            $news=News::paginate(5);

            return view('admin.news')->with(['news'=>$news]);
        }
        return view('index');
    }

    public function newsUpdatePage($id){
        if(Gate::allows('admin-enter')){
            $news=News::find($id);

            return view('admin.newsUpdate')->with(['news'=>$news]);
        }
        return view('index');
    }
    public function newsUpdate($id,Request $request){
        if(Gate::allows('admin-enter')){
            $news=News::find($id);
            $news->author=$request->author;
            $news->news=$request->news;
            $news->news_short=$request->news_short;
            $news->created_at=$request->created_at;
            $news->header=$request->header;
            if($request->image!=""){
                $image = $request->file('image');
                $avatarName = $image->getClientOriginalName();
                $image->move(public_path('image'),$avatarName);

                $news->image = '/image/'.$avatarName;
            }

            $news->save();
            return view('admin.admin')->with(['news'=>$news]);
        }
        return view('index');
    }
    public function newsDelete($id){
        if(Gate::allows('admin-enter')){

            DB::table('news')->where('id', $id)->delete();
            return view('admin.admin');
        }
        return view('index');
    }


    public function newsCreate(Request $request){
        if(Gate::allows('admin-enter')){
            $news=new News();
            $news->author=$request->author;
            $news->news=$request->news;
            $news->news_short=$request->news_short;
            $news->created_at=$request->created_at;
            $news->header=$request->header;
            if($request->image!=""){
                $image = $request->file('image');
                $avatarName = $image->getClientOriginalName();
                $image->move(public_path('image'),$avatarName);

                $news->image = '/image/'.$avatarName;
            }

            $news->save();
            return view('admin.admin')->with(['news'=>$news]);
        }
        return view('index');
    }

    public function newsCreatePage(){
        if(Gate::allows('admin-enter')){

            return view('admin.newsCreate');
        }
        return view('index');
    }


    public function users(){
        if(Gate::allows('admin-enter')){
            $users=User::paginate(5);

            return view('admin.users')->with(['users'=>$users]);
        }
        return view('index');
    }

    public function objects(){
        if(Gate::allows('admin-enter')){
            $subjects=Subject::paginate(5);

            return view('admin.objects')->with(['subjects'=>$subjects]);
        }
        return view('index');
    }

    public function objectDelete($id){
        if(Gate::allows('admin-enter')){
            $subjects=Subject::find($id);
            DB::table('subjects')->where('id',$id)->delete();
            return view('admin.admin');
        }
        return view('index');
    }

}
