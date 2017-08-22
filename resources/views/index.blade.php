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
                    <img class="img-responsive" src="{{asset('images/flamingoteam.png')}}" alt="">
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
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h2> Produkter </h2>
                            <a class="btn btn-number" href="/weblosninger#wordpress-link">Wordpress</a>
                            <a class="btn btn-number" href="/weblosninger#bootstrap-link">Bootstrap</a>
                            <a class="btn btn-number" href="/weblosninger#seo-link">Søgeoptimering</a>
                            <a class="btn btn-number" href="/weblosninger#custom-link">Custom Kode</a>
                        </div>
                    </div>
                </section>

                <section id="section-iconbox-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h2> Webshops </h2>
                            <p>Vi har tre multimediedesignere ansat i virksomheden, som har specialiseret sig inden for blandt andet grafisk design.<br></br> Vi laver alt fra billederedigering, visitkort, logo, brochurer, flyers, tryk på tøj og alt hvad man ellers kan forestille sig. Det betyder at din visuelle identitet sidder helt i skabet.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h2> Produkter </h2>
                            <a class="btn btn-number" href="/webshops#magento-link">Magento</a>
                            <a class="btn btn-number" href="/webshops#woo-link">WooCommerce</a>
                            <a class="btn btn-number" href="/webshops#shopify-link">Shopify</a>
                        </div>
                    </div>
                </section>
                <section id="section-iconbox-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h2> Grafisk Arbejde </h2>
                            <p>Vi ved hvor vigtig en god markedsføringsstrategi er for din virksomhed, og det er vi også specialiserede inden for. Vi hjælper med opsætning af Google Adwords, generel søgeoptimering, opsætning af nyhedsbreve og meget mere. <br></br>Vi ved hvilke aktiviteter, der kan hjælpe din virksomhed, så din virksomhed kan vækste og gå op i en højere enhed. </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h2> Produkter </h2>
                            <a class="btn btn-number" href="grafik#logo">Logo Design</a>
                            <a class="btn btn-number" href="grafik#webdesign">Webdesign</a>
                            <a class="btn btn-number" href="grafik#tryk">Tryksager</a>
                            <a class="btn btn-number" href="grafik#print">Print</a>
                            <a class="btn btn-number" href="grafik#visitkort">Visitkort</a>
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
                            <a class="btn btn-number" href="foto#personalebilleder">Personalebilleder</a>
                            <a class="btn btn-number" href="foto#produktbilleder">Produktbilleder</a>
                            <a class="btn btn-number" href="foto#personalebilleder">Andre Fotoopgaver</a>
                            <a class="btn btn-number" href="foto#produktvideo">Produktvideo</a>
                            <a class="btn btn-number" href="foto#reklamevideo">Reklamevideo</a>
                            <a class="btn btn-number" href="foto#profilvideo">Profil Video</a>
                        </div>
                    </div>
                </section>
            </div><!-- /content -->
        </div><!-- /tabs -->
    </section>

    @include('include.portfolio')

    <section class="testimonial">
        <div class="container">
            <div class="quote-header">
                <p class="quote-title">“Flamingo Media har udviklet en meget <span class="header-highlight">velfungerende</span> overordnet pakke til Hshop."</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="{{asset('images/thomas2.png')}}" alt="" style="margin: 0 auto;">
                </div>
                <div class="col-sm-8">
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
