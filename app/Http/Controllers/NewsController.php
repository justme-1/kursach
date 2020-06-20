<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use App;
class NewsController extends Controller
{
    public function setLocale(){
        App::setLocale(session('locale'));
    }
    public function index(){
$this->setLocale();
        $news=News::paginate(8);
        return view('news')->with(['news'=>$news]);
    }
    public function getOne($id){
$this->setLocale();
        $news=News::find($id);
        return view('news_one')->with(['news'=>$news]);
    }
}
