@extends('include/layout')
@section('content')
<script src={{ mix('js/app.js') }}></script>
@if(isset($klippekort, $user))
  <h1>{{ $user->name }}</h1>
  <ul>
    <li>Timer i alt: {{ $klippekort->hoursMax }}</li>
    <li>Timer brugt: {{ $klippekort->hoursSpend }}</li>
  </ul>
  @if($is_admin === 1 || $klippekort->user_id === $user->id)
    <div id="vis-klippekort"
       data-user_id="{{$user->id}}"
       data-id="{{$klippekort->id}}"
       data-hours_max="{{$klippekort->hoursMax}}"
       data-hours_spend="{{$klippekort->hoursSpend}}">
    </div>
  @endif
@endif
@include('include.footer')
@endsection
