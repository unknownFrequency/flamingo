@extends('include/layout')
@section('content')
<section class="video-section">
  <div class="video">
    <video id="change" autoplay="auto" loop="loop" muted="true" data-setup="{}"
    poster="{{asset('images/video_loading.jpg')}}">
    <source id="source-video" src="video/frontpage_video.mp4" type='video/mp4' />
  </video>
  <img src="{{asset('images/video_loading.jpg')}}" width="1280" height="720">
  <div class="overlay-video"></div>
</div>


<div class="text-wrapper">
  <h1 class="video-text"> <span class="element"></span> der er til at forstå </h1>
  <!--   <button class="video-btn" onClick="changeVid('video/Vranjes.mp4')">
  <img class="video-image" src="{{asset('images/play-icon.png')}}" alt="">
</button> -->
</div>
</section>
<!--
<script>
function changeVid(buttonLink) {
document.getElementById('change').src = buttonLink;
}
</script>
-->
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

        <a class="btn btn-primary" href="{{ URL::to('/kontakt#about') }}">Læs mere om os</a>

      </div>
      <div class="col-sm-7">
        <img class="img-responsive" src="{{asset('images/teamet2.jpg')}}" alt="Flamingo Team">
      </div>
    </div>
  </div>
</section>

<section id="features">
  <div class="tabs tabs-style-iconbox">
    <nav>
      <ul class="hand-cursor">
        <li><a data-togle="collapse" data-target="section-iconbox-1" class="font-icons"><i class="fa fa-desktop" aria-hidden="true"></i><span>Webløsninger</span></a></li>
        <li><a data-togle="collapse" data-target="section-iconbox-2" class="font-icons"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Webshops</span></a></li>
        <li><a data-togle="collapse" data-target="section-iconbox-3" class="font-icons"><i class="fa fa-paint-brush" aria-hidden="true"></i><span>Grafisk Arbejde</span></a></li>
        <li><a data-togle="collapse" data-target="section-iconbox-3" class="font-icons"><i class="fa fa-camera" aria-hidden="true"></i><span>Foto/Video</span></a></li>
      </ul>
    </nav>

    <div class="content-wrap">
      <section id="section-iconbox-1">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Webløsninger </h2>
            <p>Vi udvikler hjemmesider på mange forskellige platforme, så du kan få det resultat du ønsker, uden at gå på kompromis med dine ønsker, og dine forventninger til fulde kan blive indfriet. <br></br>Vi udvikler hjemmesider i alt fra Wordpress, Woocommerce, Shopify, Magento og en webløsning helt fra bunden. Du får derfor en hjemmeside, du selv kan vedligeholde og redigere.
            </p>
            <a class="btn btn-primary" href="{{ URL::to('/weblosninger') }}" style="float: left; margin-top: 13px;">Se alle webløsninger</a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{asset('images/websolutions/wordpress_priser2.png')}}" alt="Wordpress Hjemmeside">
          </div>
        </div>
      </section>

      <section id="section-iconbox-2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Webshops </h2>
            <p>Vi har tre multimediedesignere ansat i virksomheden, som har specialiseret sig inden for blandt andet grafisk design.<br></br> Vi laver alt fra billederedigering, visitkort, logo, brochurer, flyers, tryk på tøj og alt hvad man ellers kan forestille sig. Det betyder at din visuelle identitet sidder helt i skabet.
            </p>
            <a class="btn btn-primary" href="{{ URL::to('/webshops') }}" style="float: left; margin-top: 13px;">Se alle webshops</a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{asset('images/webshop/magento_priser2.png')}}" alt="Magento Webshop">
          </div>
        </div>
      </section>
      <section id="section-iconbox-3">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Grafisk Arbejde </h2>
            <p>Vi ved hvor vigtig en god markedsføringsstrategi er for din virksomhed, og det er vi også specialiserede inden for. Vi hjælper med opsætning af Google Adwords, generel søgeoptimering, opsætning af nyhedsbreve og meget mere. <br></br>Vi ved hvilke aktiviteter, der kan hjælpe din virksomhed, så din virksomhed kan vækste og gå op i en højere enhed. </p>
            <a class="btn btn-primary" href="{{ URL::to('/grafik') }}" style="float: left; margin-top: 13px;">Se alle Grafiske løsninger</a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{asset('images/grafisk/tøjtryk.png')}}" alt="Tryk på tøj">
          </div>
        </div>
      </section>
      <section id="section-iconbox-4">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2> Foto/Video </h2>
            <p>Flamingo Media har eget fotostudie, med alt hvad der hører til. Uanset om du skal bruge en video, der beskriver din virksomhed, billeder af dine produkter, personalebilleder til visitkort, eller en spændende reklame eller en produktvideo – så kan vi lave det.
            </p>
            <a class="btn btn-primary" href="{{ URL::to('/foto') }}" style="float: left; margin-top: 13px;">Se alle produkter</a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{asset('images/foto/reklamevideo.png')}}" alt="Foto og video">
          </div>
        </div>
      </section>
    </div><!-- /content -->
  </div><!-- /tabs -->
</section>

<section id="offers" style="padding: 50px;">
  <div class="container">
  	<div class="row">
              <div class="row">
                  <div class="col-md-4 text-center">
                      <div class="box">
                          <div class="box-content">
                            <h1 class="tag-title"><i class="fa fa-bars" aria-hidden="true"></i></h1>
                              <h1 class="tag-title">Responsive design</h1>
                              <hr />
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                              <br />
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 text-center">
                      <div class="box">
                          <div class="box-content">
                              <h1 class="tag-title">Andet fedt her</h1>
                              <hr />
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
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
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <br />
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  	</div>
  </div>
</section>

<div class="k am ad" style="background: url({{ URL::asset('images/thomas_testimonial2.jpg') }})">
  <div class="e">
    <div class="c aq aje">
      <div class="fq ju ajs">
        <h6 class="an ayt ahe">Magento Webshop</h6>
        <h3 class="ahs" style="line-height: 1.3;">“Flamingo Media har etableret en velfungerende pakkeløsning, med en kompleks multi store forretning med eget lager, forskellige leverings- og betalingsmuligheder.”</h3>
        <p class="ahs an">Thomas Køhler, medejer af Hshop.dk</p>
      </div>
    </div>
  </div>
</div>

<div class="slider2">
  <div class="slider-row2"></div>
</div>

@include('include.portfolio')
@include('include.footer')

@endsection
