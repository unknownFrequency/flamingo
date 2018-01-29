@extends('include/layout')
@section('content')
<script src={{ mix('js/app.js') }}></script>
@if(isset($user_ids) && !empty($user_ids))
  <h1>Nyt klippekort</h1>
  <div id="nyt-klippekort" data-user_ids="{{$user_ids}}">
  </div>
@endif
@include('include.footer')
@endsection
