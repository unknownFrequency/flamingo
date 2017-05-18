@extends('include/layout');

@section('content')
    <div class="col-sm-8">
        <h1>Registrer</h1>

            @include('include/errors')

        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Navn</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password igen</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Gem</button>
            </div>
            <br />
        </form>
    </div>
@endsection
