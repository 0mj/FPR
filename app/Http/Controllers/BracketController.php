<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BracketController extends Controller
{
    
    public function index()
    {
    	// return 'BracketController index!!!';
    	return view('pongbracket.bracket');
    }

    public function about()
    {
    	return view('pongbracket.about');
    }








}
