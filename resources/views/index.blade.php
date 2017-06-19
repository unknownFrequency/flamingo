@extends('include/layout')
@section('content')
<section class="video-section">
       <div class="video">
           <video id="change" autoplay="auto" loop="loop" muted="true" data-setup="{}"
                  poster="/~/media/nybolig/billeder/forside/barnpaagynge-jpg.jpg">
               <source id="source-video" src="video/flamingo-slider2.mp4" type='video/mp4' />
           </video>
           <div class="overlay-video"></div>
       </div>


       <div class="text-wrapper">
           <h1 class="video-text"> <span class="element"></span> der er til at forstå </h1>
           <button class="video-btn" onClick="changeVid('video/Vranjes.mp4')">
               <img class="video-image" src="{{asset('images/play-icon.png')}}" alt="">
           </button>
       </div>
   </section>

   <script>
       function changeVid(buttonLink) {
           document.getElementById('change').src = buttonLink;
       }
   </script>

<section id="about">
  <div class="container">
    <div class="section-header">
        <h2 class="section-title">Velkommen til Flamingo Media</h2>
        <p class="section-text">Vi er et bureau med brede kompetencer, og vi er ikke tilfredse, før du er. Hos os får du mulighed for at købe en samlet pakke,<br> så du ikke skal overlade din virksomheds visuelle identitet til tilfældigheder.
</p>
    </div>

    <div class="row">
      <div class="col-sm-5">
          <h3 class="column-title">Kort om os</h3>

          <p>Flamingo Media er et ambitiøst bureau, med mange forskellige færdigheder inden for webdesign, backend kodning, visuelt design, billederedigering, tryk i eget hus og markedsføring på flere platforme. Vi er dygtige til det vi laver, og vil altid gå distancen for at du som kunde, bliver helt tilfreds med det færdige resultat.
</p>

          <a class="btn btn-primary" href="#">Læs mere om os</a>

      </div>
      <div class="col-sm-7">
          <img class="img-responsive" src="{{asset('images/flamingoteam.png')}}" alt="">
      </div>
    </div>
  </div>
</section>

<section id="features">
  <div class="tabs tabs-style-iconbox">
    <nav>
      <ul>
        <li><a href="#section-iconbox-1" class="font-icons"><i class="fa fa-desktop" aria-hidden="true"></i><span>Webløsninger</span></a></li>
        <li><a href="#section-iconbox-2" class="font-icons"><i class="fa fa-paint-brush" aria-hidden="true"></i><span>Grafisk Arbejde</span></a></li>
        <li><a href="#section-iconbox-3" class="font-icons"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Markedsføring</span></a></li>
        <li><a href="#section-iconbox-4" class="font-icons"><i class="fa fa-camera" aria-hidden="true"></i><span>Foto/Video</span></a></li>
      </ul>
    </nav>
    <div class="content-wrap">
      <section id="section-iconbox-1">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Webløsninger </h2>
            <p>Vi udvikler hjemmesider på mange forskellige platforme, så du kan få det resultat du ønsker, uden at gå på kompromis med dine ønsker, og dine forventninger til fulde kan blive indfriet. <br></br>Vi udvikler hjemmesider i alt fra Wordpress, Woocommerce, Shopify, Magento og en webløsning helt fra bunden. Du får derfor en hjemmeside, du selv kan vedligeholde og redigere.
</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Produkter </h2>
          </div>
        </div>
      </section>
      <section id="section-iconbox-2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Grafisk Arbejde </h2>
            <p>Vi har tre multimediedesignere ansat i virksomheden, som har specialiseret sig inden for blandt andet grafisk design.<br></br> Vi laver alt fra billederedigering, visitkort, logo, brochurer, flyers, tryk på tøj og alt hvad man ellers kan forestille sig. Det betyder at din visuelle identitet sidder helt i skabet.
</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Produkter </h2>
          </div>
        </div>
      </section>
      <section id="section-iconbox-3">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Markedsføring </h2>
            <p>Vi ved hvor vigtig en god markedsføringsstrategi er for din virksomhed, og det er vi også specialiserede inden for. Vi hjælper med opsætning af Google Adwords, generel søgeoptimering, opsætning af nyhedsbreve og meget mere. <br></br>Vi ved hvilke aktiviteter, der kan hjælpe din virksomhed, så din virksomhed kan vækste og gå op i en højere enhed. </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Produkter </h2>
          </div>
        </div>
      </section>
      <section id="section-iconbox-4">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Foto/Video </h2>
            <p>Flamingo Media har eget fotostudie, med alt hvad der hører til. Uanset om du skal bruge en video, der beskriver din virksomhed, billeder af dine produkter, personalebilleder til visitkort, eller en spændende reklame eller en produktvideo – så kan vi lave det.
</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Produkter </h2>
          </div>
        </div>
      </section>
    </div><!-- /content -->
  </div><!-- /tabs -->
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

<section class="testimonial">
  <div class="container">
    <div class="quote-header">
        <p class="quote-title">“Flamingo Media har udviklet en meget <span class="header-highlight">velfungerende</span> overordnet pakke til Hshop."</p>
    </div>
  <div class="row">
    <div class="col-sm-6">
        <img class="img-responsive" src="{{asset('images/feature-2.png')}}" alt="">
    </div>
    <div class="col-sm-6">
      <div class="reviews">
    <blockquote class="reviews__item">
      <p>"Vi har været meget tilfredse med det stykke arbejde Flamingo Media har udført for os. Flamingo Media har etableret en <span class="highlight">velfungerende pakkeløsning,</span> , med en kompleks multi store forretning med eget lager, forskellige leverings- og betalingsmuligheder. Flamingo Media har udviklet en meget velfungerende overordnet pakke til Hshop, som vi selv er stolte og glade for at kunne vise til vores kunder."</p>
      <cite>-Thomas Køhler, Direktør Hshop </cite>
    </blockquote>
  </div>
</div>

  </div>
    </div>
</section>

       @include('include.footer')

@endsection
