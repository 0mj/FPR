<?php

namespace App\Http\Controllers;

use App\Bracket;
use Illuminate\Http\Request;


use Auth;
use Gate;
 



class BracketController extends Controller
{
    

    // public function index()
    // {
    //     $title = 'Welcome to the Bracket!!!';
    //     // return view('pongbracket.bracket', compact('title'));
    //     return view('pongbracket.bracket')->with('title',$title);
    // }

    public function about()
    {
        $title = 'About qMatt';
        $features = array(
                        // 'Ponger Family Records.','Ponger Individual Records','Ponger Doubles Records','Ponger Leagues','Ponger Appareal'
                        'Codecademy'
                        ,'Codepen'
                        ,'Github'
                        ,'Linkedin'
                        ,'Pluralsight(CodeSchool)'
                        ,'Resume'
                    );
        // return view('pongbracket.about')->with('title',$title);
        return view('pongbracket.about', compact('title', 'features'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brackets = Bracket::all();
        return view( 'brackets.index' , ['brackets' => $brackets] );
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
        $this->validate($request, [
            'tournament_name' => 'bail|required|max:255',
            // 'created_by_id' => 'bail|required',
            'amount_of_competitors' => 'bail|required',
            // 'amount_of_rounds' => 'bail|required',
            // 'single_elimination'=> 'bail|required',
            ]);


        /*
            $table->integer('created_by_id');
            $table->string('tournament_name')->unique();
            $table->integer('amount_of_competitors');
            $table->integer('amount_of_rounds');
            $table->string('single_elimination');




        */
        Bracket::create($request->all());
        return redirect('brackets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function show(Bracket $bracket)
    {
        return view('brackets.show', ['bracket' => $bracket ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function edit(Bracket $bracket)
    {
       return view('brackets.edit', ['bracket' => $bracket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bracket $bracket)
    {
        $bracket->update($request->all());
        return redirect('brackets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bracket $bracket)
    {
        //
    }
}
