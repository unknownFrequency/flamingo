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

    <title>{{ config('app.name', 'Flamingo Media') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/tabs.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/tabstyles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/lity.css') }}" />


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
<script type="text/javascript" src="{{ URL::asset('js/typed.js') }}"></script>


<script>
    $(document).ready(function() {
        $('#flash-message').fadeOut(8000);
    });
</script>
<script src="{{ asset('/js/cbpFWTabs.js') }}"></script>
<script src="{{ asset('/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('/js/lity.js') }}"></script>
<script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>





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

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top 
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</body>
</html>
</body>
</html>
