<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchPlayersController extends Controller
{
    public function index()
    {
        $players = \App\Player::all();
        return view('matchPlayers.select', compact('players'));
    }

    public function create()
    {
        return view('matchPlayers.inject');
    }

    public function store()
    {


        return redirect('/matches');
    }

    public function show($id)
    {
        return view('matchPlayers.inject');
    }
}
