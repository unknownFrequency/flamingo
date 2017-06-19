<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebshopsController extends Controller
{
    public function index()
    {
        return view('webshops/index');
    }
}
