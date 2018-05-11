<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest',['except' => 'destroy']);
	}

    public function create()
    {
    	return view('session.create');
    }

    public function store()
    {
    	 if (!auth()->attempt(request(['email','password'])))
    	 	{
                //dd(request(['email']));
    	 	return back()->withErrors([
    	 		'message' => 'Please check your credentials and try again '
    	 	])->with(request(['email']));
    	 }

         
    	 return redirect()->home();
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
