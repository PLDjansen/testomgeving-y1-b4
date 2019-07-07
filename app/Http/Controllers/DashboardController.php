<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Displays the upcoming matches
     * Displays the match results that are played
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $upcomingMatches = Match::whereDate('datetime', '>=', Carbon::now())->orderby('datetime', 'desc')->paginate(3);
        $matchResults = Match::whereDate('datetime', '<=', Carbon::now())->orderby('datetime', 'desc')->paginate(2);
        return view('index', compact('upcomingMatches', 'matchResults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matches = \App\Match::find($id);
        return view('matches.show', compact('matches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
