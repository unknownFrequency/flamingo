<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $password = Hash::make(request('password'));
        $user = User::create(request(['name', 'email', $password]));

        auth()->login($user);
        return redirect()->home();
    }

    public function create()
    {
        return view('registration/create');
    }
}
