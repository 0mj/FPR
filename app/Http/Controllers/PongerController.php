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
        $pongers = Ponger::orderBy('first_name','asc')->paginate(9);
        return view('pongers.index', ['pongers' => $pongers]);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponger $ponger)
    {
        //
    }
}
