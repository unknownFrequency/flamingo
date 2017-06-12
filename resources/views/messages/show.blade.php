@extends('include/layout')
@section('content')

    <h1 style="margin-top:150px; padding: 50px;">
        {{ $message->title }}
    </h1>

    <small style="margin-left: 10px; background-color: greenyellow; padding: 10px;">
        Oprettet: {{ $message->created_at->diffForHumans() }}
    </small>
    @if(isset($message->updated_at) && $message->updated_at != $message->created_at)
        <small style="margin-left: 10px; background-color: yellow; padding: 10px;">
            Opdateret: {{ $message->updated_at->diffForHumans() }}
        </small>
    @endif

    <p style="margin: 20px 0 0 15px;">
        <a href="{{URL::to('/messages/' . $message->id . '/edit')}}">Rediger</a>
    </p>

    <p style="padding: 30px;">
        {{ $message->body }}
    </p>

    @if(isset($responses) && !empty($responses))
        @foreach($responses as $response)
            <p style="padding: 30px 0 10px 60px;">
                <a href="admin/users/" . {{ $response->responder_id }}>{{ App\User::find($response->responder_id)->name }}</a>
                <span style="font-size: 10px;">{{ Carbon\Carbon::parse($response->created_at)->format('m/d-Y, H:i') }}</span>
            </p>

            <p style="margin-left: 70px;">
               {{ $response->body }}
            </p>
        @endforeach
    @endif

    @include('messages.respond', ['message_id' => $message->id])

@endsection
