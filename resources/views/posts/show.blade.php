@extends('include/layout')

@section('content')

    <!-- Page Content -->
    <p class="lead">
        af {{ $post->user->name }}
    </p>
    <p class="lead">
        {{ $post->body }}
    </p>
    <hr>

    @include('layouts/errors)
    <!-- Comments Form -->
    <div class="well">
        <h4>Skriv en kommentar:</h4>
        <form role="form" method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>

    <!-- Comment -->
    @foreach($post->comments as $comment)
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">TODO: Brugernavn
                    <small>{{ $comment->created_at->diffForHumans() }}</small>
                </h4>
                &nbsp;&nbsp;{{ $comment->body }}
            </div>
        </div>
    @endforeach
@endsection