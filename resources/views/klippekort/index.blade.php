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

@elseif(isset($user))
{{ $csrf_token = csrf_token() }}"
<div id="klippekort"
   data-user_id="{{$user->id}}"
   data-csrf_token="{{$csrf_token}}"
</div>
  
@endif
@include('include.footer')
@endsection
