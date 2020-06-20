<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function setLocale(){
        App::setLocale(session('locale'));
    }
    public function services(){
        $this->setLocale();
        return view('services');
    }

    public function contacts(){
        $this->setLocale();
        return view('contacts');
    }
}
