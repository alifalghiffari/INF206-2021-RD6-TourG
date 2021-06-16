<?php
use App\Models\User;
use App\Models\Game;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;


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

    public function game(Request $request){

       //dd($request->jadwal);

        // $validate_data = $request->validate([
        //     'id_user' => 'required',
        //     'Teman' => 'required',
        //     'Jadwal' => 'required',
        //     'Lokasi' => 'required',
        // ]);

        $result = DB::table('games')->insert([
        'Teman' => $request->teman,
        'Jadwal' => $request->jadwal,
        'Lokasi' => $request->lokasi,
        'id_user' => Auth::user()->id
        ]);

        return redirect('/aktivitas');
    }
}

