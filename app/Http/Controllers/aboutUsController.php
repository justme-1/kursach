<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function services(){
        return view('services');
    }

    public function contacts(){
        return view('contacts');
    }
}
