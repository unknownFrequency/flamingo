<head>
    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Få din nye hjemmeside fra Flamingo Media. Hjemmeside Århus, webudvikling, Shopify, Wordpress, WooCommerce og Magento webshop.">
    <meta name="keywords" content="magento,wordpress,hjemmeside,webshop,udvikling,webdesign,grafisk arbejde,tryk,programmør,bureau,konsulent,aarhus">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="application-name" content="@yield('title', config('app.name'))">
    <meta name="author" content="{{ config('app.name') }}"/>
    <meta name="robots" content="noindex, nofollow">
    <meta name="google-site-verification" content="nYQ2_kEoAHDZo2oXLsH2awazRoH27nIPT97f73OipkY" />
    <meta http-equiv="refresh" content="4; url=/kontakt" />
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


    <!-- JS Scripts -->
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
        })(window,document,'script','
      https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-105616036-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

