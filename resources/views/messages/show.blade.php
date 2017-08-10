@extends('include/layout')

@section('content')
    <h1 style="margin-top:150px; padding: 50px;">
        {{ $data['message']->title }}
    </h1>

    <small style="margin-left: 10px; background-color: greenyellow; padding: 10px;">
        Oprettet: {{ Carbon\Carbon::parse($data['message']->created_at)->format('m/d-Y, H:i') }}
    </small>
    @if(isset($data['message']->updated_at) && $data['message']->updated_at != $data['message']->created_at)
        <small style="margin-left: 10px; background-color: yellow; padding: 10px;">
            Opdateret: {{ Carbon\Carbon::parse($data['message']->updated_at)->format('m/d-Y, H:i') }}
        </small>
    @endif

    <p style="margin: 30px 0 -20px 10px;">
        <a href="{{ URL::to('admin/users/' . \App\User::find($data['message']->user_id)->id) }}">
            <span style="font-size: 10px; color:#777;">Bruger:</span>   {{ \App\User::find($data['message']->user_id)->name }}
        </a>
    </p>
    <p style="padding: 30px 0 0 15px;">
        {{ $data['message']->body }}
    </p>

    <p style="margin: 0px 0 0 15px;">
        <a href="{{URL::to('/messages/' . $data['message']->id . '/edit')}}">Rediger</a>
    </p>

    @if(isset($data['responses']) && !empty($data['responses']))
        @foreach($data['responses'] as $response)
            <p style="padding: 30px 0 10px 60px;">
                <a href='{{ URL::to("admin/users/{$response->responder_id}") }}'>
                    <span style="font-size: 10px; color:#777;">Bruger:</span> {{ App\User::find($response->responder_id)->name }}
                </a>
                <span style="font-size: 10px;">{{ Carbon\Carbon::parse($response->created_at)->format('m/d-Y, H:i') }}</span>
            </p>

            <p style="margin-left: 70px;">
                {{ $response->body }}
            </p>
        @endforeach
    @endif

    @include('messages.respond', ['message_id' => $data['message']->id])

@endsection
