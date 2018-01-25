@extends('include/layout')
@section('content')

<h1>{{ $user->name }}</h1>
<ul>
  @if($klippekort)
    <li>Timer i alt: {{ $klippekort->hoursMax }}</li>
    <li>Timer brugt: {{ $klippekort->hoursSpend }}</li>
  @endif
</ul>


<script src={{ mix('js/app.js') }}></script>



<div id="main"
     data-userid="{{$user->id}}"
     data-hoursmax="{{$klippekort->hoursMax}}"
     data-hoursspend="{{$klippekort->hoursSpend}}">
</div>

@include('include.footer')
@endsection
