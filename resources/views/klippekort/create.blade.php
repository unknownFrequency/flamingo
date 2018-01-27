@extends('include/layout')
@section('content')
<script src={{ mix('js/app.js') }}></script>
@if(isset($users))
  <h1>Nyt klippekort</h1>


  <div id="new-klippekort">

  </div>
@endif
@include('include.footer')
@endsection
