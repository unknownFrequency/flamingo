<!DOCTYPE html>
<html>
<head>
    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('Flamingo Media er et ambitiøst bureau, med mange forskellige færdigheder inden for webdesign, backend kodning, visuelt design, billederedigering, tryk i eget hus og markedsføring på flere platforme.', config('app.description'))"/>
    <meta name="keywords" content="@yield('magento,wordpress,hjemmeside,webshop,udvikling,webdesign,grafisk arbejde,tryk,programmør,bureau,konsulent,aarhus', config('app.keywords'))"/>
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="application-name" content="@yield('title', config('app.name'))">
    <meta name="author" content="{{ config('app.name') }}"/>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/ico/favicon.ico')}}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flamingo Media') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/tabs.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/tabstyles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}" />


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
    <div id="flash-message-success" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
@endif

@if (count(session('errors')) > 1)
    @foreach (session('errors')->all() as $error)
        <div id="flash-message-error" class="alert alert-danger">
            <ul>
                <li>{{ $error }}</li>
            </ul>
        </div>
    @endforeach
@elseif(session('errors'))
    <div id="flash-message-error" class="alert alert-danger">
        <ul>
            <li>{{ session('errors') }}</li>
        </ul>
    </div>
@endif

@yield('content')

<script src="{{ mix('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/typed.js') }}"></script>
<script src="{{ asset('/js/cbpFWTabs.js') }}"></script>
<script src="{{ asset('/js/modernizr.custom.js') }}"></script>
<link href="{{ mix('/css/websolutions.css') }}" rel="stylesheet">

<script>
    $(document).ready(function() {
        $('#flash-message-success').fadeOut(9000);
        $('#flash-message-error').fadeOut(9000);
    });
</script>



<script>
(function() {
  [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
    new CBPFWTabs( el );
  });
})();

document.addEventListener("DOMContentLoaded", function(){
  Typed.new(".element", {
  });
});

</script>

@include('include.contact_modal')
<script>
    // Get the modal
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    $(".myBtn").on("click", function () {
      modal.style.display = "block";
    });
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>


</body>
</html>
