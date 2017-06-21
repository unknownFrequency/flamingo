<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Message;

class MessagesController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->check()) {
            $messages = DB::select('select * from messages where user_id = ?', [Auth::user()->id]);
            return view('messages/index', compact('messages'));
        }  else {
           return redirect('/login')->with('message', 'Dun skal logge ind for at læse dine beskeder');
        }

    }

    public function create()
    {
        return view('messages/create');
    }

    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('messages/edit', compact('id', 'message'));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'title'  => 'required',
            'body'  => 'required'
        ]);

        $message = Message::findOrFail($id);
        $message->update([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect("/messages/{$message->id}");
    }

    public function store()
    {
        $this->validate(request(), [
            'title'  => 'required',
            'body'  => 'required'
        ]);

        if($message = Message::create([
            'user_id' => auth()->id(),
            'title'    => request('title'),
            'body'    => request('body')
        ])) {
            return redirect("/messages/". $message->id)->with('message', 'Tak for beskeden');
        } else {
            return back()->with('status', 'Noget gik sku galt!');
        }
    }

    public function show($id)
    {
        $message = Message::find($id);
        if(isset($message->messageResponse)) {
            $responses = $message->messageResponse;
        }
        dd(auth()->check());
        if(auth()->check() && $message->user_id == auth()->user()->id || auth()->user()->role_id == 1) {
            return view('messages/show', compact('message', 'responses'));
        } else {
            return redirect('messages/create');
        }
    }
}
