<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('indexadmin');
    }

    public function aktivitas()
    {
        return view('aktivitasadmin');
    }

    public function pemberitahuan()
    {
        return view('pemberitahuanadmin');
    }
}
