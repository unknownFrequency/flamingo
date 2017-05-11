@extends('include/layout')

@section('content')
    <h1>Skriv en artikel</h1>

    <form method="POST" action="/artikler">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titel">
        </div>

        <div class="form-group">
            <label for="body">Tekst</label>
            <textarea class="form-control" id="body" name="body" placeholder="Tekst" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Gem</button>

    </form>
@endsection