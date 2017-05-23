@extends('include/layout')

@section('content')

    @foreach($posts as $post)
        @include('posts/post')
    @endforeach

@endsection