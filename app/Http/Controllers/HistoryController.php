<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;
class HistoryController extends Controller
{
    public function index(){
        $feedBacks=FeedBack::all();
        return view('history')->with(['feedBacks'=>$feedBacks]);
    }
}
