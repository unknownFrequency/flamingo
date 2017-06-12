<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Message;

class MessageResponsesController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages  = DB::select('select * from messages where user_id = ?', [Auth::user()->id]);
        return view('messages/index', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('messages/show', compact('message'));
    }
}
