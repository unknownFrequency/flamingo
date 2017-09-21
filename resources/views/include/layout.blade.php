<!DOCTYPE html>
<html>
<head>
    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Få din nye hjemmeside fra Flamingo Media. Hjemmeside Århus, webudvikling, Shopify, Wordpress, WooCommerce og Magento webshop.">
    <meta name="keywords" content="magento,wordpress,hjemmeside,webshop,udvikling,webdesign,grafisk arbejde,tryk,programmør,bureau,konsulent,aarhus">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="application-name" content="@yield('title', config('app.name'))">
    <meta name="author" content="{{ config('app.name') }}"/>

    <meta name="google-site-verification" content="nYQ2_kEoAHDZo2oXLsH2awazRoH27nIPT97f73OipkY" />
    

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/ico/favicon.ico')}}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Webbureau Århus | FlamingoMedia.dk</title>

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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
      Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-105616036-1', 'auto');
      ga('send', 'pageview');
    </script>
</head>
<body>
@include('include/navigation')
@include('include/navigation_mobile')


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
