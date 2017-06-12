@extends('include/layout')

@section('content')

    @foreach($messages as $message)
        <h1 style="margin-top:150px; padding: 50px;">
            {{ $message->title }}
        </h1>

        <p style="padding: 30px;">
            {{ $message->body }}
        </p>
    @endforeach

@endsection
