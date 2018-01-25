@extends('include/layout')
@section('content')

@if(isset($klippekort, $user))
<h1>{{ $user->name }}</h1>
<ul>
  <li>Timer i alt: {{ $klippekort->hoursMax }}</li>
  <li>Timer brugt: {{ $klippekort->hoursSpend }}</li>
</ul>


<script src={{ mix('js/app.js') }}></script>



<div id="klippekort"
     data-userid="{{$user->id}}"
     data-hoursmax="{{$klippekort->hoursMax}}"
     data-hoursspend="{{$klippekort->hoursSpend}}">
</div>
@endif

@include('include.footer')
@endsection
