<!doctype html>
<html lang="{{ config('app.locale') }}">

@include('include/head')

<body>
    @include('../include/navigation')

    <br />
    <h2>{{ $task->title }}</h2>
    <ul>
          <li>{{ $task->body }}</li>
    </ul>
</body>
</html>
