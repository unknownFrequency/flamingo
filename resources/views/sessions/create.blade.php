@extends('include/layout')
@section('content')



    <h4>Login</h4>

    @include('include/errors')
<br /><br /><br /><br />
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div style="display: inline" class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <h4 style="display: inline; margin-left: 40px;"><small>Ikke registreret?... </small><a href="/register">Opret konto</a></h4>
    </form>
@endsection