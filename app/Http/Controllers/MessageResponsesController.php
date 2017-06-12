<?php

namespace App\Http\Controllers;

use App\MessageResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Message;

class MessageResponsesController extends Controller
{
//    protected $fillable = ['message_id', 'responder_id', 'body'];

    public function create($message_id)
    {
        return view('messages/respond', compact('message_id'));
    }

    public function store($id)
    {
        $this->validate(request(), [
            'body'  => 'required'
        ]);

        $response = New MessageResponse;
        $response->message_id = $id;
        $response->responder_id = auth()->id();
        $response->body = request('body');

        if($response->save()) {
            return back()->with('message', 'Tak for dit svar');
        }
    }

}
