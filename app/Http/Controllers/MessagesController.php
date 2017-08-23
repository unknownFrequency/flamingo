<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Message;
use App\MessageResponse;
use App\User;

class MessagesController extends Controller
{

  public function index()
  {
    // TODO: Use middleware
    if(auth()->check()) {
      (int)$user_id = auth()->user()->id;
    }
    if(isset($user_id)) {
      if(auth()->user()->role_id == 1) {
        if($messages = Message::getMessagesFrom(10, $user_id, false)) {
          $needsResponse = MessageResponse::getLatestResponse(auth()->user()->id);
          $messagesWithoutResponse = Message::getMessagesWithoutResponse(auth()->user()->id);

          return view('messages/index', compact('messages', 'needsResponse', 'messagesWithoutResponse'));
        }
      } else {
        if($messages = Message::getMessages($user_id)) {
          return view('messages/index', compact('messages'));
        }
      }
    } else {
      return redirect('/login')->with('message', 'Du skal logge ind for at læse dine beskeder');
    }

  }

  public function create()
  {
    $admins = User::where('role_id', '=', 1)->get();
    return view('messages/create', compact('admins'));
  }

  public function edit($id)
  {
    $message = Message::findOrFail($id);
    return view('messages/edit', compact('id', 'message'));
  }

  public function update($id)
  {
    $message = Message::findOrFail($id);

    if(!empty(request('solved')) && request('solved') === "1" || request('solved') === "0"){
      //(int)request('solved') === 1 ? $message->solved = 1  : $message->solved = 0 ;
      $message->solved = (int)request('solved');
      $message->save();

      if($message->solved === 0) {
        return redirect("/beskeder/{$message->id}");
      } else {
        return redirect("/beskeder");
      }
    }

    $this->validate(request(), [
      'title'  => 'required',
      'body'  => 'required'
    ]);

    $data = [
      'user_id' => request('user_id'),
      'title' => request('title'),
      'body' => request('body')
    ];

    $message->update([
    ]);

    event(new MessageCreated($message));
    return redirect("/beskeder/{$message->id}");
  }

  public function store()
  {
    $this->validate(request(), [
      'title'   => 'required',
      'body'    => 'required',
    ]);

    $data = [
      'user_id'  => auth()->id(),
      'title'    => request('title'),
      'body'     => request('body')
    ];

    if(request('til_id')) {
      $data['to_id'] = (int)request('til_id');
    } elseif(request('admins')) {
      $data['to_id'] = (int)request('admins');
    }

    if($message = Message::create($data)) {
      event(new MessageCreated($data, $message->id));
      return redirect("/beskeder/". $message->id)
        ->with('message', 'Tak for beskeden');
    } else {
      return back()
        ->with('status', 'Noget gik sku galt!');
    }
  }

  public function show($id)
  {
    $message = Message::find($id);

    if(isset($message->messageResponse)) {
      $responses = $message->messageResponse;
    }
    if(auth()->check() && $message->user_id == auth()->user()->id
      || auth()->check() && auth()->user()->role_id == 1) {
      $data = ['message' => $message];
      if(isset($responses) && !empty($responses)) {
        $data['responses'] = $responses;
      }
      return view('messages/show', compact('data', ['data' => $data]));
    } elseif(isset($message->responder_id) && $message->responder_id == auth()->user()->id) {
      return view('messages/show', compact('message', 'responses'));
    } else {
      return redirect('admin/users');
    }
  }
}



















