@extends('include/layout')

@section('content')

<section class="slider">
  <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_foto.jpg')}}" alt="First slide">
          <div class="carousel-caption">
            <h3>Knivskarpe billeder</h3>
            <p>Fokus på blablablalalaaar</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider2_foto.jpg')}}" alt="Second slide">
          <div class="carousel-caption">
            <h3>Second slide</h3>
            <p>This is the second slide.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider3_foto.jpg')}}" alt="Second slide">
          <div class="carousel-caption">
            <h3 style="color: #333;">Produktbilleder</h3>
            <p style="color: #333;">Fremvis dine produkter bla bla</p>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<section>

  <section id="overview">
      <div class="container">
        <div class="section-header">
        </div>
        <div class="row">
          <div class="col-sm-5">
              <h3 class="column-title">Foto/Video</h3>

              <p>Flamingo Media er et ambitiøst bureau, med mange forskellige færdigheder inden for webdesign, backend kodning, visuelt design, billederedigering, tryk i eget hus og markedsføring på flere platforme. Vi er dygtige til det vi laver, og vil altid gå distancen for at du som kunde, bliver helt tilfreds med det færdige resultat.
    </p>

          </div>
            <div class="col-sm-7 overview-buttons">
                <a class="btn btn-primary" href="#">Logo</a>
                <a class="btn btn-primary" href="#">Webdesign</a>
                <a class="btn btn-primary" href="#">Tryksager</a>
                <a class="btn btn-primary" href="#">Visitkort</a>
                <a class="btn btn-primary" href="#">Tryk på tøj</a>
            </div>
        </div>
      </div>
  </section>

  <section id="portfolio">
    <div class="row nomargin">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/freqenz_logo.png')}}" alt="Frisør Freqenz"><h1>Frisør Freqenz</h1><hr><p>For Frisør Frequenz har vi taget professionelle modelbilleder til hjemmesiden.</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/hshop_case.png')}}" alt="Hshop"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/hshop_logo.png')}}" alt="Hshop Logo"><h1>Hshop.dk</h1><hr><p>For Hshop har vi udviklet alt fra magentosite, logo, produktbilleder, produktvideoer, markedsføring og et internt lagersystem.</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/dhf_case.png')}}" alt="DHF"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/dhf_logo.png')}}" alt="DHF Logo"><h1>DHF</h1><hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/sundhedmedmening_case.png')}}" alt="Sundhed Med Mening"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/sundhedmedmening_logo.png')}}" alt="Sundhed Med Mening Logo"><h1>Sundhed Med Mening</h1><hr><p>Vi har lavet en hjemmeside for sundhedmedmening, der primært bruges som bookingkanal for virksomheden. </p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/göteborg_case.png')}}" alt="Göteborg BHC"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/göteborg_logo.png')}}" alt="Göteborg BHC"><h1>Göteborg BHC</h1><hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/h-outlet_case.png')}}" alt="H-Outlet"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/outlet_logo.png')}}" alt="H-Outlet Logo"><h1>H-outlet.dk</h1><hr><p>For H-outlet har vi udviklet et e-commerce site med logo, produktbilleder, produktvideoer og et internt lagersystem.</p> </div></div>
        </div>
    </div>
  </section>

@include('include.footer')

@endsection
