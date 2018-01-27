@extends('include/layout')
@section('content')
<script src={{ mix('js/app.js') }}></script>
@if(isset($klippekort, $user))
  <h1>{{ $user->name }}</h1>
  <ul>
    <li>Timer i alt: {{ $klippekort->hoursMax }}</li>
    <li>Timer brugt: {{ $klippekort->hoursSpend }}</li>
  </ul>


  <div id="klippekort"
     data-user_id="{{$user->id}}"
     data-hours_max="{{$klippekort->hoursMax}}"
     data-hours_spend="{{$klippekort->hoursSpend}}">
  </div>
@endif
@include('include.footer')
@endsection
