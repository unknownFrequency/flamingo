@extends('include/layout')
@section('content')
<section class="video-section">
  <div class="video">
    <video autoplay="auto" loop="loop" muted="true"
    poster="/~/media/nybolig/billeder/forside/barnpaagynge-jpg.jpg" src="{{asset('video/flamingo-slider2.mp4')}}">
    </video>
    <div class="overlay-video"></div>
  </div>
  <div class="text-wrapper">
    <h1> Hjemmesider der er til at forstå </h1>
    <div class="video-link">
      <a href="www.vimeo.com"> Se vores introvideo her! </a>
    </div>
  </div>

</section>

<section class="about">
  <div class="container">
    <div class="section-header">
        <h2 class="section-title">Velkommen til Flamingo Media</h2>
        <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
    </div>

    <div class="row">
      <div class="col-sm-5 wow fadeInRight">
          <h3 class="column-title">Kort om os</h3>

          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

          <a class="btn btn-primary" href="#">Læs mere om os</a>

      </div>
      <div class="col-sm-7 wow fadeInLeft">
          <img class="img-responsive" src="{{asset('images/flamingoteam.png')}}" alt="">
      </div>
    </div>
  </div>
</section>

<section id="features">
  <div class="tabs tabs-style-iconbox">
    <nav>
      <ul>
        <li><a href="#section-iconbox-1"><img class="forsideicon" src="images/webløsninger.png"><span>Webløsninger</span></a></li>
        <li><a href="#section-iconbox-2"><img class="forsideicon" src="images/grafiskarbejde.png"><span>Grafisk Arbejde</span></a></li>
        <li><a href="#section-iconbox-3"><img class="forsideicon" src="images/markedsføring.png"><span>Markedsføring</span></a></li>
        <li><a href="#section-iconbox-4"><img class="forsideicon" src="images/foto.png"><span>Foto/Video</span></a></li>
      </ul>
    </nav>
    <div class="content-wrap">
      <section id="section-iconbox-1">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> En fed overskrift </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Produkter </h2>
            <p>Test</p>
          </div>
        </div>
      </section>
      <section id="section-iconbox-2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> En fed overskrift </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p>Test</p>
          </div>
        </div>
      </section>
      <section id="section-iconbox-3">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> En fed overskrift </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p>Test</p>
          </div>
        </div>
      </section>
      <section id="section-iconbox-4">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> En fed overskrift </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p>Test</p>
          </div>
        </div>
      </section>
    </div><!-- /content -->
  </div><!-- /tabs -->
</section>

<section class="portfolio">
  <div class="row nomargin">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
        <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
        <div class="portfolio-overlay"><div class="portfolio-text"> <h1>Frisør Freqenz</h1><hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p> </div></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
        <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
        <div class="portfolio-overlay"></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
        <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
        <div class="portfolio-overlay"></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
        <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
        <div class="portfolio-overlay"></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
        <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
        <div class="portfolio-overlay"></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
        <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
        <div class="portfolio-overlay"></div>
      </div>
  </div>
</section>

<section class="testimonial">
  <div class="container">
    <div class="quote-header">
        <p class="quote-title">“I’ve never had a <span class="header-highlight">better handle</span> on my business.”</p>
    </div>
  <div class="row">
    <div class="col-sm-6">
        <img class="img-responsive" src="{{asset('images/feature-2.png')}}" alt="">
    </div>
    <div class="col-sm-6">
      <div class="reviews">
    <blockquote class="reviews__item">
      <p>"As the business owner, <span class="highlight">I feel more connected and aware</span> of what is going on in the office when I’m away. It’s easy to see what needs to be done with deadlines and who is responsible for the task."</p>
      <cite>-Cynthia White, Law Offices of Cynthia L. White</cite>
    </blockquote>
  </div>
</div>

  </div>
    </div>
</section>

       @include('include.footer')

@endsection
