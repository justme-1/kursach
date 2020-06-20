<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;
use App;
class HistoryController extends Controller
{
    public function setLocale(){
        App::setLocale(session('locale'));
    }
    public function index(){
        $this->setLocale();
        $feedBacks=FeedBack::all();
        return view('history')->with(['feedBacks'=>$feedBacks]);
    }
}
