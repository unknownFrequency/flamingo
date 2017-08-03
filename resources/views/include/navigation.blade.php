<header id="top-header" class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top" >
    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ URL::to('/') }}"><img src={{asset('images/FlamingoLogoDONEDONE.png')}} alt=""></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" role="navigation">
            <ul class="navbar-nav mr-auto">
                <li class="dropdown dropdown-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Produkter
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-large row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><a href="{{ URL::to('/weblosninger') }}">Webløsninger</a></li>
                                <li id="wordpress"><a href="{{ URL::to('/weblosninger') }}">Wordpress</a></li>
                                <li id="bootstrap"><a href="{{ URL::to('/weblosninger') }}">Bootstrap</a></li>
                                <li id="seo"><a href="{{ URL::to('/weblosninger') }}">Søgeoptimering</a></li>
                                <li id="customcode"><a id="custom-code-link">Custom Kode</a></li>
                                <li id="programmering"><a href="{{ URL::to('/weblosninger') }}">Programmering</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><a href="{{ URL::to('/webshops') }}">Webshops</a></li>
                                <li><a href="{{ URL::to('/webshops') }}">Magento</a></li>
                                <li><a href="{{ URL::to('/webshops') }}">WooCommerce</a></li>
                                <li><a href="{{ URL::to('/webshops') }}">Shopify</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <a href="{{ URL::to('/grafik') }}"><li class="dropdown-header">Grafisk Arbejde</li></a>
                                <li><a href="{{ URL::to('/grafik') }}">Logo</a></li>
                                <li><a href="{{ URL::to('/grafik') }}">Webdesign</a></li>
                                <li><a href="{{ URL::to('/grafik') }}">Tryksager</a></li>
                                <li><a href="{{ URL::to('/grafik') }}">Print</a></li>
                                <li><a href="{{ URL::to('/grafik') }}">Visitkort</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><a href="{{ URL::to('/foto') }}">Foto/Video</a></li>
                                <li><a href="{{ URL::to('/foto') }}">Personalebilleder</a></li>
                                <li><a href="{{ URL::to('/foto') }}">Produktbilleder</a></li>
                                <li><a href="{{ URL::to('/foto') }}">Andre Fotoopgaver</a></li>
                                <li><a href="{{ URL::to('/foto') }}">Produktvideo</a></li>
                                <li><a href="{{ URL::to('/foto') }}">Reklamevideo</a></li>

                            </ul>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/priser') }}">Priser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/posts') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/kontakt') }}">Kontakt</a>

                </li>
            </ul>
            <div class="call-icon"> <img src="{{asset('images/call-icon.png')}}"></div>

            <div class="pull-xs-right">
                @if(isset(Auth::user()->name))
                    @include('include/usermenu')
                @else
                    <a class="login" href="/admin/login">Login<img src="{{asset('images/login-icon.png')}}"></a>
                @endif
            </div>
        </div>
    </div>
</header>
<script>
    document.getElementById("custom-code-link").onclick = function () {
        location.href = "weblosninger#custom-code";
    };

</script>





























