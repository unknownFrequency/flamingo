<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
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
