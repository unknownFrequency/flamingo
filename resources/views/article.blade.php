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
    <h2>Artikler</h2>
    <ul>
        @foreach ($tasks as $task)
          <li>{{ $task->title }}</li>
          <li>{{ $task->body }}</li>
          <br />
        @endforeach
    </ul>
</body>
</html>
