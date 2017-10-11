@extends('include/layout')

@section('content')

<div class="slider section">
  <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
    <ol class="carousel-indicators">
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_tilbud.png')}}" alt="Webløsninger slider">
        <div class="carousel-caption">
          <h3 style="color: #333;">Håndværkertilbud</h3>
          <br>
          <h2 style="color: #cd1a58;">Spar 33% på din nye hjemmeside!</h2>
        </div>
      </div>
    </div>
  </div>
</div> <!-- Carousel -->

<section id="about">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Velkommen til Flamingo Media</h2>
      <p style="width:80%; text-align:center; margin: 0 auto;">I hele oktober 2017 hjælper vi alle håndværkere med at få nogle lækre hjemmesider, til en kraftig nedjusteret pris. Du kan bruge hjemmesiden til at erhverve kunder, og vi ved at markedsføring på nettet virker. Du kan vise alle dine udførte projekter frem, så du kan vise hvor og hvordan du skiller dig ud fra mængden.
<br></br>
Vi har egne fotografer, der for meget rimelige priser gerne vil tage billeder til din nye hjemmeside, hvis du ikke allerede er i besiddelse af nogen – vi kan også lave professionelt videoarbejde.

Vi anbefaler også at du i samme stil med hjemmesiden får udarbejdet visitkort, som du kan dele ud til dine kunder.
      </p>
    </div>
  </div>
</section>

<section id="overview">
  <div class="container">
    <h3> Tilbud </h3>

    <div class="row form-group product-chooser">



      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="{{asset('images/hjemmeside_tibud.jpg')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Wordpress Priser">
          <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Hjemmeside</span>
            <span class="description">Du kommer online på en ny flot hjemmeside, udviklet i det system, der passer til din virksomheds behov. Dine kunder får let ved at finde og kontakte jer, så I kan fokusere på det I er gode til. </span>
          </div>
          <div class="price-button">
            <button class="btn-price myBtn">Modtag tilbud</button>
          </div>
        </div>
      </div>


      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="{{asset('images/visitkort_tilbud.jpg')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Bootstrap Priser">
          <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Visitkort</span>
            <span class="description">Vi anbefaler et sæt visitkort, så I kan vise hvem I er, og hvordan man finder jeres hjemmeside og kontaktoplysninger.  </span>
          </div>
          <div class="price-button">
            <button class="btn-price myBtn">Modtag tilbud</button>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="{{asset('images/fotografi_tilbud.jpg')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Custom kode priser">
          <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Fotografi</span>
            <span class="description">I skal selvfølgelig vise billeder af jeres fremførte projekter. Hvis I ikke allerede ligger inde med gode billeder, vil vores fotografer gerne tage dem for jer - til en meget rimelig pris.  </span>
          </div>
          <div class="price-button">
            <button class="btn-price myBtn">Modtag tilbud</button>
          </div>
        </div>
      </div>

    </div>


</div>
</section>

<section id="offers" style="padding: 50px;">
    <h2 class="section-title">Flamingo Media tilbyder altid</h2>
    <br></br>
  <div class="container">
  	<div class="row">
              <div class="row">
                  <div class="col-md-4 text-center">
                      <div class="box">
                          <div class="box-content">
                            <h1 class="tag-title"><i class="fa fa-bars" aria-hidden="true"></i></h1>
                              <h1 class="tag-title">Responsive design</h1>
                              <hr />
                              <p>I en verden hvor det primære fokus ligger hos mobile enheder, er det for os en selvfølge at de webløsninger vi udvikler, altid fungerer responsivt. Det betyder at dine kunder kan navigere problemfrit på din nye hjemmeside – uanset hvilken platform de er er på. </p>
                              <br />
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 text-center">
                      <div class="box">
                          <div class="box-content">
                            <h1 class="tag-title"><i class="fa fa-code" aria-hidden="true"></i></h1>
                              <h1 class="tag-title">Nyeste Teknologier</h1>
                              <hr />
                              <p>Teknologierne udvikler sig konstant, og bliver hele tiden opdateret, men vores udviklere er hele tiden up to date med de seneste teknologier, og kan derfor udvikle dine løsninger i præcis de sprog, du ønsker. </p>
                              <br />
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 text-center">
                      <div class="box">
                          <div class="box-content">
                            <h1 class="tag-title"><i class="fa fa-life-ring" aria-hidden="true"></i></h1>
                              <h1 class="tag-title">Support </h1>
                              <hr />
                              <p>Det er vores førsteprioritet at din virksomhed kan fungere uden nedetid, derfor yder vi den optimale support til din hjemmeside. Vi samarbejder efter vores mening med det bedste hosting selskab i Danmark, som også tilbyder 24 timers support.</p>
                              <br />
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  	</div>
  </div>
</section>


@include('include.portfolio')
@include('include.footer')

<!-- The Modal -->
<div id="myModal1" class="modal">

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
            @include('include.contact_form')
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:20px;">
          <p class="lead">Få et uforpligtende tilbud <span class="text-success">indenfor 24 timer</span></p>
          <ul class="list-unstyled" style="line-height: 2">
            <li><span class="fa fa-check text-success"></span> See all your orders</li>
            <li><span class="fa fa-check text-success"></span> Fast re-order</li>
            <li><span class="fa fa-check text-success"></span> Save your favorites</li>
            <img class="img-responsive" src="{{asset('images/tilbud.png')}}" alt="modtag gratis tilbud">

          </ul>
        </div>
      </div>
    </div>
    <div class="modal-footer">

    </div>
  </div>
</div><!-- The Modal -->
<div id="myModal2" class="modal">
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
            @include('include.contact_form')
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:20px;">
          <p class="lead">Få et uforpligtende tilbud <span class="text-success">indenfor 24 timer</span></p>
          <ul class="list-unstyled" style="line-height: 2">
            <li><span class="fa fa-check text-success"></span> See all your orders</li>
            <li><span class="fa fa-check text-success"></span> Fast re-order</li>
            <li><span class="fa fa-check text-success"></span> Save your favorites</li>
            <img class="img-responsive" src="{{asset('images/tilbud.png')}}" alt="modtag gratis tilbud">

          </ul>
        </div>
      </div>
    </div>
    <div class="modal-footer">

    </div>
  </div>
</div>
@endsection
