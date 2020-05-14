<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        $news=News::paginate(8);
        return view('news')->with(['news'=>$news]);
    }
    public function getOne($id){

        $news=News::find($id);
        return view('news_one')->with(['news'=>$news]);
    }
}
