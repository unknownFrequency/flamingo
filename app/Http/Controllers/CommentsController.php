<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

//        $this->validate(request(), ['body' => 'required|min:2']);

        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => Auth::user()->id
        ]);

        return back();
    }
}
