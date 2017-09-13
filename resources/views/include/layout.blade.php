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

<script>
'use strict';

var carousel = function carousel(options) {

    var _carousel = {

        paused: false,

        stopped: false,

        options: {
            speed: 3000,
            acceleration: 5,
            reverse: false,
            selector: '.c-carousel',
            slidesSelector: '.c-carousel__slides',
            leftArrowSelector: '.c-carousel__arrow--left',
            rightArrowSelector: '.c-carousel__arrow--right'
        },

        init: function init() {
            var options = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];

            // Copy options to this.options
            for (var prop in options) {
                if (!options.hasOwnProperty(prop)) break;
                this.options[prop] = options[prop];
            }

            // Cache nodes
            var carousel = document.querySelector(options.selector || this.options.selector);
            var slides = this._slides = carousel.querySelector(this.options.slidesSelector);
            this._leftArrow = carousel.querySelector(this.options.leftArrowSelector);
            this._rightArrow = carousel.querySelector(this.options.rightArrowSelector);

            // Multiply speed value by the number of slides
            this.options.speed = this.options.speed * slides.children.length;

            // Set slides container width
            this.width = slides.offsetWidth;

            // Repeat elements
            slides.innerHTML = slides.innerHTML + slides.innerHTML + slides.innerHTML;

            this._registerEvents();
            this._animate();
        },
        _registerEvents: function _registerEvents() {
            var _this = this;

            var speed = this.options.speed;
            var reverse = this.options.reverse;

            this._rightArrow.addEventListener('mouseover', function () {
                _this.options.speed = speed / _this.options.acceleration;
                _this.options.reverse = false;
            });
            this._rightArrow.addEventListener('mouseleave', function () {
                _this.options.speed = speed;
                _this.options.reverse = reverse;
            });
            this._leftArrow.addEventListener('mouseover', function () {
                _this.options.speed = speed / _this.options.acceleration;
                _this.options.reverse = true;
            });
            this._leftArrow.addEventListener('mouseleave', function () {
                _this.options.speed = speed;
                _this.options.reverse = reverse;
            });

            // Pause when cursor is over carousel
            this._slides.addEventListener('mouseover', this.pause.bind(this));
            this._slides.addEventListener('mouseleave', this.start.bind(this));

            // Pause when cursor is over carousel
            window.addEventListener('resize', function () {
                _this.width = _this._slides.offsetWidth;
            });
        },
        pause: function pause() {
            this.paused = true;
        },
        start: function start() {
            this.paused = false;
        },
        stop: function stop() {
            this.stopped = true;
        },
        _animate: function _animate() {
            var _this2 = this;

            var slides = this._slides;
            var oneThird = slides.lastElementChild.getBoundingClientRect().right / 3;
            var framesCount = 0;
            var step = 0;
            var posX = 0;

            var animate = function animate() {
                if (!_this2.paused) {

                    framesCount = _this2.options.speed * 60 / 1000;
                    step = oneThird / framesCount;

                    posX += _this2.options.reverse ? step : -step;

                    slides.style.transform = 'translateX(' + posX + 'px)';

                    if (_this2.options.reverse) {
                        if (posX >= _this2.width - oneThird) {
                            posX = _this2.width - oneThird * 2;
                        }
                    } else {
                        if (Math.abs(posX) >= oneThird * 2) {
                            posX = -oneThird;
                        }
                    }
                }
                !_this2.stopped && requestAnimationFrame(animate);
            };
            animate();
        }
    };

    _carousel.init(options);

    return _carousel;
};

window.onload = function () {
    return carousel({
        selector: '.c-carousel'
    });
};
</script>

</body>
</html>
