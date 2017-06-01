@extends('include/layout')

@section('content')
   <h1>Profil</h1>
   <br />
   <img src="{{ asset('storage') ."/". $user->avatar }}" />
   <p>Brugernavn: {{ $user->name }} </p>
   <p>Email: {{ $user->email }} </p>
   <p>Oprettet: {{ Carbon\Carbon::parse($user->created_at)->format('d-m/Y') }}</p>

@endsection
