<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Auth;

class PostsController extends Controller
{

    function __construct()
    {
        // Only allow these path with auth
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $posts = Post::latest()->get();
        $archives = Post::selectRaw('year(created_at) as year, 
            monthname(created_at) as month, 
            count(*) as published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)')
            ->get()
            ->toArray();

        return view('posts/index', compact('posts', 'archives'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }

    public function create() {
        return view('posts/create');
    }

    public function store() {
//        dd(request()->all());
//        $post =  new Post;
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();
//
        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);

        //Mass Assignment
//        Post::create([
//            'title' => request('title'),
//            'body'  => request('body'),
//            'user_id' => auth()->id()
//        ]);
        // OR using our own method from model User
        auth()->user()->publish(new Post(request(['title', 'body'])));
        return redirect('/posts');
    }



}
