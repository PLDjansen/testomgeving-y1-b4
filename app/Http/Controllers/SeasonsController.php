<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;
use App\Season;

class SeasonsController extends Controller
{
    public function index()
    {
        $seasons = \App\Season::all();

        return view('seasons.index', compact('seasons'));
    }

    public function back()
    {


        return view('seasons.index', compact('seasons'));
    }

    public function create()
    {

        return view('seasons.create');
    }

    public function store()
    {
        $seasons = new Season();
        $seasons->name = request('nameInput');
        $seasons->year = request('yearInput');
        $seasons->save();
        return redirect('/seasons');
        //return request()->all();
    }

    public function show($id)
    {
        $seasons = \App\Season::find($id);

        return view('seasons.show', compact('seasons'));
    }

    public function edit($id)
    {
        $seasons = \App\Season::find($id);

        return view('seasons.edit', compact('seasons'));
    }

    public function update($id)
    {

        $seasons = \App\Season::find($id);

        $seasons->name = request('nameInput');
        $seasons->year = request('yearInput');

        $seasons->save();

        return redirect('/seasons');

    }
    public function destroy($id)
    {
        \App\Season::findOrFail($id)->delete();
        return redirect('/seasons');
    }
}