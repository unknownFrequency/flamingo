<header id="top-header" class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top" >
  <div class="container">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="{{ URL::to('/') }}"><img src={{asset('images/FlamingoLogoDONEDONE.png')}} alt="Flamingo Media Logo"></a>

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
                <li class="dropdown-header">
                  <a class="nav-produker-headers" href="{{ URL::to('/weblosninger') }}" style="color:#fff;">Webløsninger</a></li>
                <li><a href="/weblosninger#wordpress-link">Wordpress</a></li>
                <li><a href="/weblosninger#bootstrap-link">Bootstrap</a></li>
                <li><a href="/weblosninger#seo-link">Søgeoptimering</a></li>
                <li><a href="/weblosninger#custom-link">Custom Kode</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header"><a href="{{ URL::to('/webshops') }}" style="color:#fff;">Webshops</a></li>
                <li><a href="/webshops#magento-link">Magento</a></li>
                <li><a href="/webshops#woo-link">WooCommerce</a></li>
                <li><a href="/webshops#shopify-link">Shopify</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">
                  <a href="{{ URL::to('/grafik') }}" style="color:#fff;">Grafisk Arbejde</a>
                </li>
                <li><a href="/grafik#logo">Logo</a></li>
                <li><a href="/grafik#webdesign">Webdesign</a></li>
                <li><a href="/grafik#tryksager">Tryksager</a></li>
                <li><a href="/grafik#print">Print</a></li>
                <li><a href="/grafik#visitkort">Visitkort</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header"><a href="{{ URL::to('/foto') }}" style="color:#fff;">Foto/Video</a></li>
                <li><a href="/foto#personalebilleder">Personalebilleder</a></li>
                <li><a href="/foto#produktbilleder">Produktbilleder</a></li>
                <li><a href="/foto#produktvideo">Produktvideo</a></li>
                <li><a href="/foto#reklamevideo">Reklamevideo</a></li>
                <li><a href="/foto#profilvideo">Profilvideo</a></li>

              </ul>
            </li>
          </ul>

        </li>
        <li class="nav-item">
          <a class="nav-link {{ active('priser') }}"
             href="{{ URL::to('/priser') }}">Priser
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ active(['posts', 'posts/*']) }}"
             href="{{ URL::to('/posts') }}">Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ active('kontakt') }}"
             href="{{ URL::to('/kontakt') }}">Kontakt
          </a>
        </li>
      </ul>
      <!-- Trigger/Open The Modal -->
      <a class="btn-number" href="tel:+4556568181">
        <i class="fa fa-phone" aria-hidden="true"></i> 81 81 56 56
      </a>
      <button type="button" class="myBtn" id="myBtn3">Bliv Kontaktet</button>

      <!-- Bruger menu -->
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


</div>
