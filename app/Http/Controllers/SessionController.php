<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function __construct()
    {
        // only user not logged in can access this page, except the destroy session method
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create() {
        return view('sessions/create');
    }

    public function destroy() {
        auth()->logout();
        return redirect()->home();
    }

    public function store()
    {
        if(! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Check dine oplysninger og prøv igen...'
            ]);
        }
        return redirect('/user/' . Auth()->user()->id)->with('message', 'Velkommen tilbage '. Auth()->user()->name ? Auth()->user()->name : '.');
    }
}
