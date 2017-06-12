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

    <p style="padding: 30px;">
        {{ $message->body }}
    </p>

    @foreach($responses as $response)
        <p style="padding: 30px 0 10px 60px;">
            <a href="admin/users/" . {{ $response->responder_id }}>{{ App\User::find($response->responder_id)->name }}</a>
        </p>

        <p style="margin-left: 70px;">
           {{ $response->body }}
        </p>
    @endforeach

    <p style="padding:10px">
        <a href="{{URL::to('/messages/' . $message->id . '/edit')}}">Rediger</a>
    </p>
    <p style="float:left;">
        <a href="{{URL::to('/messages/' . $message->id . 'respond')}}">Svar</a>
    </p>

@endsection
