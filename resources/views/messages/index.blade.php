@extends('include/layout')
@section('content')
    <div>
        <h2>Beskeder fra de sidste 7 dage</h2>

        @foreach($messages as $message)
            Fra bruger: <a href="{{ URL::to('/admin/users/'.$message->user_id) }}">{{ App\User::find($message->user_id)->name }}</a> <br /><br />
            <a href="{{ URL::to('/beskeder/'.$message->id) }}">{{ $message->title }}</a> <br />
            {{ $message->body }} <br />

            @if($message->to_id)
                <span>Besked til: </span>
                <a href="{{ URL::to('admin/users').'/'.$message->to_id }}">
                    {{ App\User::find($message->to_id)->name }}
                </a>
            @endif

            <form method="POST" action="/beskeder/{{$message->id}}">
                {!! method_field('PATCH') !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="checkbox" name="solved" value="{{ $message->solved == 0 ? 1  : 0 }}">
                @if($message->solved === 0)
                    Færdiggør<br />
                @else
                    Genoptag samtale<br />
                @endif
                <input type="submit" value="Submit">
            </form>
            <br />
            <hr />
        @endforeach
    </div>
@endsection
