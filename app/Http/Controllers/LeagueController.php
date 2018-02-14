<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $leagues = League::orderBy('name','asc')->paginate(18);
        // $leagues = League::orderBy('name','asc');
        return view('leagues.index', ['leagues' => $leagues]);
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
        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $league_id = $request->input('league_id');
        $league = [
            'title' => $title,
            'description' => $description,
            'time' => $time,
            'league_id' => $league_id,
            'view_league' => [
                'href' => 'api/v1/league/1/',
                'method' => 'GET'
            ]
        ];

        return "IT WORKS!";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function show(League $league)
    {
        return view('leagues.show', ['league' => $league ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function edit(League $league)
    {
       # Relation 
        // $pongers = \App\Ponger::get()->pluck('first_name', 'id')->sortBy('first_name');
        $pongers = \App\Ponger::get()->sortBy('first_name');
        return view('leagues.edit',compact('league', 'pongers'));

        #Simple edit
        #SIMPLE EDIT..
        // return view('leagues.edit', ['league' => $league]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, League $league)
    {
        $league->update($request->all());
        $league->pongers()->sync($request->pongers);
        return redirect('leagues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function destroy(League $league)
    {
        //
    }
}
