<!doctype html>
<html lang="{{ config('app.locale') }}">
@include('include/head')
<body>
    @include('../include/navigation')
    <br />

    <!-- TASKS -->
    <h2>Opgaver</h2>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{$task->id}}">{{ $task->title }}</a></li>
            <li>{{ $task->body }}</li>
            <br />
        @endforeach
    </ul>
</body>
</html>
