<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GraphicsController extends Controller
{
    public function index()
    {
       return Redirect::to(route('grafik'). '#grafisk-arbejde');
        return view('graphics/index');
    }
}
