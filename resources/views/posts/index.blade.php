@extends('include/layout')

@section('content')

    {{--@include('posts/include/sidebar')--}}
    <div class="text-center" style="margin-top:40px;">
        @foreach($posts as $post)
            @include('posts/post')
        @endforeach
    </div>
@endsection