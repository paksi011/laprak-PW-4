<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        $games = DB::table('games')->get();
        return view('games.index', ['games' => $games]);
    }
}