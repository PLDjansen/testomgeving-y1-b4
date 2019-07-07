<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MatchesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * displays the matches that are upcoming and finished
     */
    public function index(){

        $matchesToPlay = Match::whereDate('datetime', '>=', Carbon::now())->get();
        $matchesPlayed = Match::whereDate('datetime', '<=', Carbon::now())->get();
        $matches = Match::orderby('created_at', 'desc')->paginate(5);
        $seasons = Match::orderby('created_at', 'desc')->paginate(5);
        return view('matches.index', compact('matches','seasons', 'matchesToPlay', 'matchesPlayed'));

    }
    


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $seasons = \App\Season::all();
        return view('matches.create', compact('seasons'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(){
      
        $matches = new Match();
        $matches->name = request('NaamInput');
        $matches->datetime = request('DatumInput');
        $matches->seasons_id = request('SeizoenInput');
        $matches->name_home = request('ThuisInput');
        $matches->name_away = request('UitInput');

        $matches->result_team = request('ResultTeamInput');
        $matches->result_opponent = request('ResultOpponentInput');

        $matches->homescored = request('ThuisGescoordInput');
        $matches->homeshots = request('ThuisSchotenInput');
        $matches->homeshotspercentage = request('ThuisSchotenPercentage');

        $matches->homedrebounds = request('ThuisVerdedigendeReboundsInput');
        $matches->homearebounds = request('ThuisAanvallendeReboundsInput');
        $matches->hometotalrebounds = request('ThuisTotaalReboundsInput');

        $matches->homefshots = request('ThuisStrafworpenInput');
        $matches->homefshotsscored = request('ThuisStrafworpenGescoordInput');
        $matches->homefshotspercentage = request('ThuisStrafworpenPercentageInput');


        $matches->awayscored = request('UitGescoordInput');
        $matches->awayshots = request('UitSchotenInput');
        $matches->awayshotspercentage = request('UitSchotenPercentage');

        $matches->awaydrebounds = request('UitVerdedigendeReboundsInput');
        $matches->awayarebounds = request('UitAanvallendeReboundsInput');
        $matches->awaytotalrebounds = request('UitTotaalReboundsInput');

        $matches->awayfshots = request('UitStrafworpenInput');
        $matches->awayfshotsscored = request('UitStrafworpenGescoordInput');
        $matches->awayfshotspercentage = request('UitStrafworpenPercentageInput');
        $matches->save();
        return redirect('/matches');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Shows 1 match with the details
     */
    public function show($id){
        $matches = \App\Match::find($id);
        return view('matches.show', compact('matches'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $matches = \App\Match::find($id);
        return view('matches.edit', compact('matches'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     */
    public function update($id){
        $matches = Match::find($id);
        $matches->name = request('NaamInput');
        $matches->datetime = request('DatumInput');
        $matches->seasons_id = request('SeizoenInput');
        $matches->name_home = request('ThuisInput');
        $matches->name_away = request('UitInput');

        $matches->result_team = request('ResultTeamInput');
        $matches->result_opponent = request('ResultOpponentInput');

        $matches->homescored = request('ThuisGescoordInput');
        $matches->homeshots = request('ThuisSchotenInput');
        $matches->homeshotspercentage = request('ThuisSchotenPercentage');

        $matches->homedrebounds = request('ThuisVerdedigendeReboundsInput');
        $matches->homearebounds = request('ThuisAanvallendeReboundsInput');
        $matches->hometotalrebounds = request('ThuisTotaalReboundsInput');

        $matches->homefshots = request('ThuisStrafworpenInput');
        $matches->homefshotsscored = request('ThuisStrafworpenGescoordInput');
        $matches->homefshotspercentage = request('ThuisStrafworpenPercentageInput');


        $matches->awayscored = request('UitGescoordInput');
        $matches->awayshots = request('UitSchotenInput');
        $matches->awayshotspercentage = request('UitSchotenPercentage');

        $matches->awaydrebounds = request('UitVerdedigendeReboundsInput');
        $matches->awayarebounds = request('UitAanvallendeReboundsInput');
        $matches->awaytotalrebounds = request('UitTotaalReboundsInput');

        $matches->awayfshots = request('UitStrafworpenInput');
        $matches->awayfshotsscored = request('UitStrafworpenGescoordInput');
        $matches->awayfshotspercentage = request('UitStrafworpenPercentageInput');
        $matches->save();
        return redirect('/matches');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id){
        Match::findOrFail($id)->delete();
        return redirect('/matches');
    }
}
