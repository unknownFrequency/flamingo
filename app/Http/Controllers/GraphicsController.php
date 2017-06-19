<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    public function index()
    {
        return view('graphics/index');
    }
}
