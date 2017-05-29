<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => $password,
            'role_id' => 2
        ]);

        auth()->login($user);
        return redirect()->home();
    }

    public function create()
    {
        return view('registration/create');
    }
}
