@extends('include/layout')

@section('content')

    @if(isset($_GET) && !empty($_GET) && $_GET['msg-send'])
        <div id="flash-message-success" class="alert alert-success" role="alert">
            Tak for din henvendelse, vi vender tilbage hurtigst muligt
        </div>
    @endif


<section class="contact-page">
  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Kontakt os - <small>og få et uforpligtende tilbud!</small></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-8">
            @include('include.contact_form')
        </div>
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-3">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Vores kontor:</legend>
                <address>
                    <strong>Flamingomedia Aps</strong><br>
                    P. Hiort-Lorenzens Vej 4<br>
                    8000, Arhus C<br>
                    <abbr title="Phone">
                    </abbr>
                    81 81 56 56
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:#">info@flamingomedia.dk</a>
                </address>
            </form>
        </div>


    </div><!-- end row -->
</div><!-- end container -->

</section>
<a class="jump-link" id="about"></a>
<!--Personale information -->
<section class="contact-page">
  <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin: 0 auto;">
                  <div class="card">
                      <img class="card-img-top" src="{{asset('images/christopher_kontakt.png')}}" alt="Christopher Mørk">
                      <div class="card-block">
                          <h4 class="card-title">Christopher Mørk</h4>
                          <div class="meta">
                              <p>Projektleder - Designer</p>
                          </div>
                          <div class="card-text">
                              Uddannet Digital Konceptudvikler med speciale i E-commerce. <br/>
                              Arbejder med design, seo, kundekontakt og overblik over projekterne.
                          </div>
                      </div>
                      <div class="card-footer">
                        <span><i class=""></i><a href="mailto:#">cm@flamingomedia.dk</a></span>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin: 0 auto;">
                  <div class="card">
                      <img class="card-img-top" src="{{asset('images/ruben_kontakt.png')}}" alt="Ruben Thuesen">
                      <div class="card-block">
                          <h4 class="card-title">Ruben Thuesen</h4>
                          <div class="meta">
                              <p>Programmør</p>
                          </div>
                          <div class="card-text">
                              8 års erfaring med programmering af hjemmesider. </br>
                              Backend, Serveropsætning, Sikkerhed, Linux, Scripting mm.
                          </div>
                      </div>
                      <div class="card-footer">
                        <span><i class=""></i><a href="mailto:#">rt@flamingomedia.dk</a></span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin: 0 auto;">
                  <div class="card">
                      <img class="card-img-top" src="{{asset('images/anders_kontakt.png')}}" alt="Anders Jakobsen">
                      <div class="card-block">
                          <h4 class="card-title">Anders Jakobsen</h4>
                          <div class="meta">
                              <p>Webdesign - Foto/Video</p>
                          </div>
                          <div class="card-text">
                              Uddannet Digital Konceptudvikler med speciale i E-commerce. <br/>
                              Arbejder med webdesign, og er vores ekspert inden for foto – og videoopgaver.
                          </div>
                      </div>
                      <div class="card-footer">
                          <span><i class=""></i><a href="mailto:#">aj@flamingomedia.dk</a></span>
                      </div>
                  </div>
              </div>
          </div>
  </div>


  <div class="container">
      <h1 class="h1">Om os</h1>
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

              <p>Flamingo Media er et ambitiøst bureau, med mange forskellige færdigheder inden for webdesign, backend kodning, visuelt design, billederedigering, tryk i eget hus og markedsføring på flere platforme.</br>
               Vi er dygtige til det vi laver, og vil altid gå distancen for at du som kunde, bliver helt tilfreds med det færdige resultat.

Vi har som webbureau forstået, at en tilfreds og glad kunde, er en kunde, der forstår hvad de har betalt for. Vi giver derfor altid en grundig undervisning i det leverede produkt, og betragter ikke en kunde som afsluttet, før du ved, hvordan du skal bruge din nye hjemmeside i din virksomhed.

<br></br>Vi befinder os i Aarhus, hvor vi har haft fast base de sidste år. Vi har mulighed for at køre til hele landet, hvis dine systemer skulle have brug for det.   </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('images/logo-icon-light.png')}}" alt="Flamingo Media Logo" style="width: 100%;">
        </div>

      </div>
  </div>
</section>

@include('include.footer')

@endsection
