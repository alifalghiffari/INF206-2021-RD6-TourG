<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermainanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('menu');
    }

    public function permainan()
    {
        return view('permainan');
    }
}
