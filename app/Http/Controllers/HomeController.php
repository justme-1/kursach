<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            redirect()->route('index');
        }
    }
    public function updateUserData(Request $request)
    {
        if(Auth::check()) {
            return view('homeProfile');
        }else{
            redirect()->route('index');
        }
    }
}
