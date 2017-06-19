<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsolutionsController extends Controller
{
    public function index()
    {
        return view('websolutions/index');
    }
}
