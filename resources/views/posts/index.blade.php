@extends('include/layout')

@section('content')

    {{--@include('posts/include/sidebar')--}}

    @foreach($posts as $post)
        @include('posts/post')
    @endforeach

@endsection