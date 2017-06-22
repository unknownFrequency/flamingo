<header id="top-header" nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top" >
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ URL::to('/') }}"><img src={{asset('images/FlamingoLogoDONEDONE.png')}} alt=""></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" role="navigation">
      <ul class="navbar-nav mr-auto">
        <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produkter <b class="caret"></b></a>

				<ul class="dropdown-menu dropdown-menu-large row">
            <li class="col-sm-3">
						<ul>
						<a href="{{ URL::to('/weblosninger') }}"><li class="dropdown-header">Webløsninger</li></a>
              <li><a href="#">Wordpress</a></li>
              <li><a href="#">Bootstrap</a></li>
              <li><a href="#">Søgeoptimering</a></li>
              <li><a href="#">Custom Kode</a></li>
              <li><a href="#">Programmering</a></li>
						</ul>
					</li>
          <li class="col-sm-3">
						<ul>
							<a href="{{ URL::to('/webshops') }}"><li class="dropdown-header">Webshops</li></a>
              <li><a href="#">Magento</a></li>
							<li><a href="#">WooCommerce</a></li>
							<li><a href="#">Shopify</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<a href="{{ URL::to('/grafik') }}"><li class="dropdown-header">Grafisk Arbejde</li></a>
							<li><a href="#">Logo</a></li>
							<li><a href="#">Webdesign</a></li>
							<li><a href="#">Tryksager</a></li>
							<li><a href="#">Print</a></li>
							<li><a href="#">Visitkort</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<a href="{{ URL::to('/foto') }}"><li class="dropdown-header">Foto/Video</li></a>
							<li><a href="#">Personalebilleder</a></li>
							<li><a href="#">Produktbilleder</a></li>
							<li><a href="#">Andre Fotoopgaver</a></li>
              <li><a href="#">Produktvideo</a></li>
							<li><a href="#">Reklamevideo</a></li>
							<li><a href="#">Profil Video</a></li>
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
          <a class="nav-link" href="#portfolio">Cases</a>
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
