<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BracketController extends Controller
{
    
    public function index()
    {
    	$title = 'Welcome to the Bracket!!!';
    	// return view('pongbracket.bracket', compact('title'));
    	return view('pongbracket.bracket')->with('title',$title);
    }

    public function about()
    {
    	$title = 'About the Bracket.';
    	$features = array(
    					'Ponger Family Records.'
    					,'Ponger Individual Records'
    					,'Ponger Doubles Records'
    					,'Ponger Leagues'
    					,'Ponger Appareal'
    				);
    	// return view('pongbracket.about')->with('title',$title);
    	return view('pongbracket.about', compact('title', 'features'));
    }








}