@extends('include/layout')

@section('content')
<h2>Beskeder</h2>
<p><a href="/beskeder/create">Skriv ny besked</a></p>
    @foreach($messages as $message)
        <h1 style="margin-top:150px; padding: 50px;">
            <a href="{{ URL::to('beskeder/' . $message->id) }}">
                {{ $message->title }}
            </a>
        </h1>

        <p style="padding: 30px;">
            {{ $message->body }}
        </p>
        <p>
        </p>
    @endforeach

@endsection
