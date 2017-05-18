<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Comment::class);
    }

    // Eg. $comment->user->name
    public function user() {
        return $this->belongsTo(User::class);
    }
}
