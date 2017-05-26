@extends('include/layout')

@section('content')
<div class="container-fluid">
   <div class="container-fluid">
       <div class="jumbotron">
           <h1>Admin Kontrolpanel</h1>
       </div>

       <div class="col-sm-8 col-sm-offset-2">
           <button class="btn btn-primary link">
               <a href="{{ url('/posts/create') }}">Skriv Artikel</a>
           </button>

           <button class="btn btn-primary link">
               <a href="{{ url('/tasks/create') }}">Tilføj Opgave</a>
           </button>
       </div>
   </div>
</div>
@endsection
