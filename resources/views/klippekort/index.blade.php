<!-- For admin overview of klippekort  -->

@extends('include/layout')
@section('content')
<script src={{ mix('js/app.js') }}></script>
@if(isset($klippekorts))
  @foreach($klippekorts as $klippekort) 
    <?php $user = Auth::user()->find($klippekort->user_id) ?>

    <h4 style="margin-left: 0.5em; font-weight: 999; text-decoration: underline;">
      <a href="/admin/users/{{$user->id}}">{{$user->name}}</a>
    </h4>
    <ul>
      <li>Email: {{$user->email}}</li>
      <li>Timer købt: {{$klippekort->hoursMax}}</li>
      <li>Timer tilbage: {{$klippekort->hoursMax - $klippekort->hoursSpend}}</li>
      <li><a href="/klippekort/{{$user->id}}">Se Klippekort</a></li>
    </ul>
  @endforeach
@endif
@include('include.footer')
@endsection
