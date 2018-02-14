<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function signin(Request $request)
    {
    	$this->validate($request, [ 
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
    	if(Auth::attempt()) {
    		return reidrect()->route('admin.index');

    	}
    	return redirect()->back()->with('fail', 'Authentication failed!');
    }
}
