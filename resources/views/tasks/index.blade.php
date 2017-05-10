<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flamingo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
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
