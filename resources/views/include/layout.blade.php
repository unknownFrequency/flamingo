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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P8GBZX6');</script>
    <!-- End Google Tag Manager -->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105584679-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-105584679-1');
  </script>

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8GBZX6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
    let modal = document.getElementById('myModal');
    let span = document.getElementsByClassName("close")[0];
    let myBtn = document.getElementById("myBtn3");
    console.log(myBtn);
    // $(".myBtn").on("click", function () {
    myBtn.onclick = function () {
      modal.style.display = "block";
    };
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

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
