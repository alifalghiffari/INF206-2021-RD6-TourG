<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->level == 'Admin'){
                return view('indexadmin');
            }
            else{
                return view('home');
            }
        }
        else{
            return view('welcome');
        }
    }
}
