<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    public function index()
    {

        $players = Player::all();

        return view('players.index', compact('players'));
    }


    public function create()
    {
        return view('players.create');
    }

    public function store()
    {
        $seasons = new Seasons();

        $seasons->name = request('nameInput');
        $seasons->year = request('yearInput');
        $seasons->save();

        return redirect('/seasons');

        //return request()->all();

    }

    public function show($id)
    {

        $players = \App\player::find($id);


        return view('players.show', compact('players'));
    }

    public function edit($id)
    {
        $seasons = \App\Seasons::find($id);

        return view('seasons.edit', compact('seasons'));
    }

    public function update($id)
    {

        $seasons = \App\Seasons::find($id);

        $seasons->name = request('nameInput');
        $seasons->year = request('yearInput');

        $seasons->save();

        return redirect('/seasons');

    }
    public function destroy($id)
    {
        \App\Seasons::findOrFail($id)->delete();
        return redirect('/seasons');
    }


}
