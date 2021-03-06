@extends('include/layout')
@section('content')

<section style="padding-top: 50px; padding-bottom: 50px; background-color: #fff;">
  <div class="container">
    <!-- Page Content -->
    <p class="lead" style="font-size: 2em;">
        {!! $post->title !!}
    </p>
    <hr>
    <p class="lead">
        {!! $post->body !!}
    </p>
    <p class="lead">
        af {{ App\User::find($post->author_id)->name }}
    </p>
    <hr>

    <!-- Show messages -->
    @include('include/errors')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

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
    @if(isset($post->comments) && !empty($post->comments))
        @foreach($post->comments as $comment)
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading">
                        {{ $comment->user->name }}
                        <small>{{ $comment->created_at->diffForHumans() }}</small>
                    </h4>
                    &nbsp;&nbsp;{{ $comment->body }}
                </div>
            </div>
        @endforeach
    @endif
</div>
</section>
    @include('include.footer')

@endsection
