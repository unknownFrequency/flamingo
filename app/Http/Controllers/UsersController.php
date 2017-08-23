<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->first();

        if(isset($user->id) && Auth()->user()) {
            if($user->id == Auth()->user()->id || Auth()->user()->role_id == 1) {
                return redirect('/admin/users/'.$id);
            }
        } else {
            return view('sessions/create');
        }
    }
}
