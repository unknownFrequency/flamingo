@extends('include/layout')

@section('content')

<section class="slider">
  <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_grafik.jpg')}}" alt="First slide">
          <div class="carousel-caption">
            <h3>Tryksager</h3>
            <p>Vi designer alt fra flyers til visitkort, og sørger for at de bliver leveret til dig.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider2_grafik.jpg')}}" alt="Second slide">
          <div class="carousel-caption">
            <h3>Altid den billigste pris</h3>
            <p>Vi garanterer altid den billigste pris, så du ikke skal betale mere hos os, for at få dine tryksager printet.</p>
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
<section><!-- slider -->

<section id="grafisk-arbejde" name="grafisk-arbejde">
    <div class="container" role="tabpanel">
      <div class="section-header">
          <h2 class="section-title">Grafisk Arbejde</h2>

          <p class="section-text">
              Vi er et bureau med brede kompetencer, og vi er ikke tilfredse, før du er. Hos os får du mulighed for at købe en samlet pakke,
              <br> så du ikke skal overlade din virksomheds visuelle identitet til tilfældigheder.
          </p>
      </div>

      <div class="row">
          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/grafisk/logo.png')}}" alt="">
          </div>

          <div class="col-sm-5" style="padding-top: 8%;">
              <h3 class="column-title">Logo Design</h3>

              <p>
                  Dit logo er det første dine kunder, stifter bekendtskab med. Det er det vigtigste element i din visuelle identitet,
                  og det er det, du bliver husket på. Derfor er det vigtigt, at logoet sidder helt i skabet, så du et letgenkendelig.
                  Vi kan tegne et logo, der er din virksomhed værdig, og som vil komme til at fremstå helt skarp på din hjemmeside eller dine print.
              </p>
              <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>
          </div>
      </div>
    </div>
</section>

<section id="webdesign">
    <div class="container">
      <div class="section-header">
      </div>
      <div class="row">
        <div class="col-sm-5" style="padding-top: 8%;">
            <h3 class="column-title">Websdesign</h3>

            <p>Vi sætter en ære i udelukkende at lave smukke hjemmesider, så vores kunder stolt kan vise den frem til deres kunder. Vi laver layoutet, som du ønsker det, og udvikler hjemmesiden med nøjagtigt det farmetema, der passer til din virksomheds visuelle identitet. Vi har dygtiggjort os inden for alle former for webdesign, og kan derfor altid tilbyde en fuldstændig pakke.
            </p>
            <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

        </div>
          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/grafisk/webdesign.png')}}" alt="">
          </div>

      </div>
    </div>
</section>

<section id="tryksager" style="background-image: url({{ URL::asset('images/paper.png') }})">
    <div class="container">
      <div class="section-header">
          <h2 class="section-title">Tryksager</h2>
          <p class="section-text">Har du noget information du vil præsentere på en lækker og tydelig måde kan en brochure eller flyer være måden at gøre det på. Vi designer dem selvfølgelig altid fra bunden, nøjagtigt som du ønsker. Vi kan også få dem printet til dig, så du bare skal vente på leveringen.

  </p>
      </div>

      <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">

          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/grafisk/tøjtryk.png')}}" alt="">
          </div>
          <div class="col-sm-5" style="padding-top: 8%;">
              <h3 class="column-title">Tryk på tøj</h3>

              <p>Vi har mulighed for at trykke tøj til din virksomhed, så dine ansatte er en del af jeres visuelle identitet. Vi fører selv simple hvide og sorte t-shirts, men du kan naturligvis selv vælge nøjagtigt hvilket tøj du vil have trykt.
              </p>

          </div>

      </div>
      <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;" id="print">
        <div class="col-sm-5" style="padding-top: 8%;">
            <h3 class="column-title">Print</h3>

            <p>Flamingo Media er et ambitiøst bureau, med mange forskellige færdigheder inden for webdesign, backend kodning, visuelt design, billederedigering, tryk i eget hus og markedsføring på flere platforme. Vi er dygtige til det vi laver, og vil altid gå distancen for at du som kunde, bliver helt tilfreds med det færdige resultat.
            </p>

        </div>
          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/grafisk/print.png')}}" alt="">
          </div>

      </div>

      <div class="row" style="margin-bottom: 42px;" id="visitkort">

          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/grafisk/visitkort.png')}}" alt="">
          </div>
          <div class="col-sm-5" style="padding-top: 8%;">
              <h3 class="column-title">Visitkort</h3>

              <p>Vi designer også visitkort til dig eller hele din virksomhed, så alle får deres egen visuelle identitet. Vi kan også få dem printet, så du ikke skal gøre andet end at sige ja eller nej til vores design.

              </p>

          </div>

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
