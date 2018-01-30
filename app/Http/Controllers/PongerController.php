<?php

namespace App\Http\Controllers;

use App\Ponger;
use Illuminate\Http\Request;

class PongerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pongers = Ponger::all();
        // return view('pongers.index', ['pongers' => $pongers]);
        $pongers = Ponger::orderBy('last_name','asc')->paginate(9);
        return view('pongers.index', ['pongers' => $pongers]);

    }

    public function getAllPongers()
    {

        // $pongers = Ponger::all();
        $pongers = Ponger::orderBy('first_name','asc')->get();
        return view('pongers.getAllPongers', ['pongers' => $pongers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // some work on local master
    public function create()
    {
        return view ('pongers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request <-- that is all the form data
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'bail|required|max:255',
            'last_name' => 'bail|required',
            'city' => 'bail|required',
            'state'=> 'bail|required',
            ]);
        Ponger::create($request->all());
        return redirect('pongers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function show(Ponger $ponger)
    {
        return view('pongers.show', ['ponger' => $ponger ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponger $ponger)
    {
       # PIVOT..
        // $leagues = \App\League::get()->pluck('name', 'id')->sortBy('name');
        // return view('pongers.edit', compact('ponger', 'leagues'));
        
        #SIMPLE EDIT..
        return view('pongers.edit', ['ponger' => $ponger]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponger $ponger)
    {
        // $ponger->update($request->all());
        // return redirect('pongers');

        $ponger->update($request->all());
        $ponger->leagues()->sync($request->leagues);
        return redirect('pongers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponger $ponger)
    {
        $ponger->delete();
      return redirect('pongers');
    }
}
