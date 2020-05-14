<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Gate;

class AdminController extends Controller
{
    public function index(){
       if(Gate::allows('admin-enter')){
           return view('admin');
       }
        return view('index');
    }
}
