<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function getPage($slug)
    {
        $page = DB::table('pages')->where('slug', $slug)->first();
        return view('pages/index', ['page' => $page]);
    }

    public function index()
    {
        return view('pages/index', ['pages' => $this->getPages()]);
    }
}
