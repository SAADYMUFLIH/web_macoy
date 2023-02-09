<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pemain;
use App\Models\PemainGames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;


class DashboardController extends Controller
{
    public function Dashboard(){
        $data = Game::all();
        return view('dashboard.Dashboard',compact('data'));
        // $ml = Game::with('player')->get()->where('nama_game', '=', 'Mobile Legend');
        // // $jumlahml = Game::whereRelation('player', 'game_id', '1')->get();
        // $jumlahml = Game::whereRelation('player', function ($x) {
        //     $x->where('game_id', 1);
        // })->get();
        // dd($jumlahml);
    }

}