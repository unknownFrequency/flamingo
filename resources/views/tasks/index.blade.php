@include('include/layout')

@foreach ($tasks as $task)
    <li><a href="/tasks/{{$task->id}}">{{ $task->title }}</a></li>
    <li>{{ $task->body }}</li>
    <br />
@endforeach
