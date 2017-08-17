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
              <li class="dropdown-header"><a href="{{ URL::to('/weblosninger') }}" style="color:#fff;">Webløsninger</a></li>
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
              <li class="dropdown-header"><a href="{{ URL::to('/grafik') }}" style="color:#fff;">Grafisk Arbejde</a></li>
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
        <a class="nav-link" href="{{ URL::to('/priser') }}">Priser</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/posts') }}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/kontakt') }}">Kontakt</a>

      </li>
    </ul>
    <!-- Trigger/Open The Modal -->
    <a class="btn-number" href="tel:+4556568181"><i class="fa fa-phone" aria-hidden="true"></i> 81 81 56 56</a><button id="myBtn">Bliv Kontaktet</button>
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

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:20px;">
          <h2>Indhent dit gratis tilbud i dag.</h2>

          <div class="well well-sm">
            <form method="POST" action="/kontakt">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                      Navn</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Udfyld navn" required="required" />
                    </div>
                    <div class="form-group">
                      <label for="email">
                        Email Adresse</label>
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Udfyld email" required="required" /></div>
                      </div>
                      <div class="form-group">
                        <label for="subject">
                          Område</label>
                          <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Vælg venligst en:</option>
                            <option value="service">Webløsning</option>
                            <option value="suggestions">Webshop</option>
                            <option value="product">Grafisk Arbejde</option>
                            <option value="photo">Foto/Video</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">
                            Besked</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Skriv her"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Besked</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:20px;">
                    <p class="lead">Få et uforpligtende tilbud <span class="text-success">indenfor 24 timer</span></p>
                    <ul class="list-unstyled" style="line-height: 2">
                      <li><span class="fa fa-check text-success"></span> See all your orders</li>
                      <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                      <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                      <img class="img-responsive" src="{{asset('images/tilbud.png')}}" alt="">

                    </ul>
                  </div>
                </div>
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>

        </div>
