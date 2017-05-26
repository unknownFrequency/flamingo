<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
@include('include/navigation')

    @if($flash = session('message'))
       <div id="flash-message" class="alert alert-success" role="alert">
           {{ $flash }}
       </div>
    @endif

    @yield('content')


<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
</body>
</html>
