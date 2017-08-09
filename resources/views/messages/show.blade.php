@extends('include/layout')

@if( (auth()->check() && auth()->user()->id == $message->user_id) || auth()->user()->role_id == 1 )

    @section('content')
        <h1 style="margin-top:150px; padding: 50px;">
            {{ $message->title }}
        </h1>

        <small style="margin-left: 10px; background-color: greenyellow; padding: 10px;">
            Oprettet: {{ Carbon\Carbon::parse($message->created_at)->format('m/d-Y, H:i') }}
        </small>
        @if(isset($message->updated_at) && $message->updated_at != $message->created_at)
            <small style="margin-left: 10px; background-color: yellow; padding: 10px;">
                Opdateret: {{ Carbon\Carbon::parse($message->updated_at)->format('m/d-Y, H:i') }}
            </small>
        @endif

        <p style="margin: 30px 0 -20px 10px;">
            <a href="{{ URL::to('admin/users/' . \App\User::find($message->user_id)->id) }}">
                {{ \App\User::find($message->user_id)->name }}
            </a>
        </p>
        <p style="padding: 30px 0 0 15px;">
            {{ $message->body }}
        </p>

        <p style="margin: 0px 0 0 15px;">
            <a href="{{URL::to('/messages/' . $message->id . '/edit')}}">Rediger</a>
        </p>

        @if(isset($responses) && !empty($responses))
            @foreach($responses as $response)
                <p style="padding: 30px 0 10px 60px;">
                    <a href='{{ URL::to("admin/users/{$response->responder_id}") }}'>
                        {{ App\User::find($response->responder_id)->name }}
                    </a>
                    <span style="font-size: 10px;">{{ Carbon\Carbon::parse($response->created_at)->format('m/d-Y, H:i') }}</span>
                </p>

                <p style="margin-left: 70px;">
                   {{ $response->body }}
                </p>
            @endforeach
        @endif

        @include('messages.respond', ['message_id' => $message->id])

    @endsection

@else
   <script>
       window.location = "/admin/users";
   </script>
@endif

