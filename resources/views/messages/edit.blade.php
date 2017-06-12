@extends('include/layout')

@section('content')
    <h1>Skriv en besked til FLamingo</h1>

    @include('messages/include/form', ['method' => 'PATCH', 'message' => $message])

    @include('include/errors')


@endsection
