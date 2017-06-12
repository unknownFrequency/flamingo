<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // For allowing Mass Assignments. Like in Rails
    protected $fillable = ['user_id', 'title', 'body'];

    // Fields not allowed in Mass Assignment
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function messageResponse() {
        return $this->hasMany(MessageResponse::class);
    }

    public function addMessage($title, $body, $user_id)
    {
        if(Message::create([
            'id' => $this->id,
            'user_id' => $user_id,
            'title'    => $title,
            'body'    => $body
        ]))
        {
            return back()->with('status', 'Tak for kommentaren');
        } else {
            return back()->with('status', 'Noget gik sku galt!');
        }
    }
}
