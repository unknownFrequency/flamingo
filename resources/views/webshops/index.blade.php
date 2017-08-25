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
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_webshop.jpg')}}" alt="Webshop slider">
        <div class="carousel-caption">
          <h3 style="color: #333;">Webshops</h3>
          <p style="color: #333;">Vi arbejder i de tre største e-commerce frameworks, fordi vi ved det virker.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider2_webshop.jpg')}}" alt="Support slider">
        <div class="carousel-caption">
          <h3 style="color: #333;">Altid hurtig support</h3>
          <p style="color: #333;">Vores kunder er det vigtigste for os, derfor er vores support helt i top.</p>
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
</section>


<section id="overview">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Webshops</h2>
      <p class="section-text">
        Vi er et bureau med brede kompetencer, og vi er ikke tilfredse, før du er.
        Hos os får du mulighed for at købe en samlet pakke,<br>
        så du ikke skal overlade din virksomheds visuelle identitet til tilfældigheder.
      </p>
    </div>
  </div>

  <a id="magento-link" class="jump-link"></a>

  <div class="container">
    <div class="row">

      <div class="col-sm-5" style="padding-top: 8%;">
        <h3 class="column-title">Magento Webshop</h3>

        <p>Magento er bygget til webshops, hvilket også betyder at vi anbefaler det til mellemstore til store virksomheder.
          Magento kan sagtens fungere til små webshops, men grundet det komplicerede CMS-system, anbefales det til store virksomheder,
          som får glæde at den store funktionalitet som Magento tilbyder.
          <br />Magento er det mest brugte CMS-system til de største virksomheder i verden,
          fordi det tilbyder alt hvad man som virksomhed får brug for. Der er uendelig mulighed for tilpasning af din hjemmeside,
          hvilket betyder at du kan få din hjemmeside nøjagtigt som du ønsker.
        </p>

        <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
        <button data-toggle="collapse" class="btn btn-primary price" data-target="#magento">Se Priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>

      </div>

      <div class="col-sm-7">
        <img class="img-responsive" src="{{asset('images/webshop/magento.png')}}" alt="Magento Webshop">
      </div>
      <!-- Pricing -->
      <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
        <div id="magento" class="collapse" style="margin-top: 15px; text-align: center;">
          <div class="container content">
            <div class="row" style="border: 3px solid #eee;">
              <div class="col-md-3" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Magento
                    </h3>
                    <h4><i>Ydelser </i><i></i></h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      Installation af Magento
                    </li>
                    <li>
                      Installation af tema
                    </li>
                    <li>
                      Opsætning af sprog
                    </li>
                    <li>
                      Opsætning af dansk moms
                    </li>
                    <li>
                      SEO-optimering
                    </li>
                    <li>
                      Betalingsmuligheder
                    </li>
                    <li>
                      Epay installation
                    </li>
                    <li>
                      Google Analytics
                    </li>
                    <li>
                      Opsætning af GLS og Postnord
                    </li>
                    <li>
                      Onestepcheckout installation
                    </li>
                    <li>
                      Opsætning af søgefunktion
                    </li>
                    <li>
                      Oprettelse af produkter
                    </li>
                    <li>
                      Mailchimp integration
                    </li>
                    <li>
                      Lagerstyring
                    </li>
                    <li>
                      Support
                    </li>
                    <li>
                      Unikt design
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Basis
                    </h3>
                    <h4><i>DKK </i><i>18.000,-</i></h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Plus
                    </h3>
                    <h4><i>DKK </i><i>25.000,-</i>
                    </h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Pro
                    </h3>
                    <h4><i>DKK </i><i>40.000,-</i>
                    </h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//End Pricing -->
      </div>
    </div>
  </div>

  <div class="container reasons" style="margin-top: 38px;">
    <h3 style="text-align: center; font-weight:lighter; margin-bottom: 27px;"> 5 Grunde til at vælge Magento: </h3>
    <div class="process">
      <div class="process-row">
        <div class="process-step">
          <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">1</h4></button>
          <p> Er en stor webshop med mange produkter. </p>
        </div>
        <div class="process-step">
          <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">2</h4></button>
          <p>Sælger i flere forskellige lande.</p>
        </div>
        <div class="process-step">
          <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">3</h4></button>
          <p>Vil have det bedste uden kompromis.</p>
        </div>
        <div class="process-step">
          <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">4</h4></button>
          <p>Vil have open source, så alt kan tilpasses uden begrænsninger.</p>
        </div>
        <div class="process-step">
          <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">5</h4></button>
          <p>Vil benytte det mest brugte framework i verden.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<a id="shopify-link" class="jump-link"></a>

<section id="overview">
  <div class="container">
    <div class="section-header">
    </div>
    <div class="row">
      <div class="col-sm-7">
        <img class="img-responsive" src="{{asset('images/webshop/shopify.png')}}" alt="Shopify Webshop">
      </div>
      <div class="col-sm-5" style="padding-top: 8%;">
        <h3 class="column-title">Shopify Webshop</h3>

        <p>Forskelligt fra de andre CMS-systemer skal der med Shopify betales et månedligt beløb for at bruge deres framework. Der er uendelige design – og opbygningsmuligheder, hvilket gør det perfekt til dig, som vil have din helt egen unikke webshop, og er villig til at betale mere for det.

          <br />Shopify er middelsvært selv at redigere i, hvorfor vi også i højere grad tilbyder denne løsning til den seriøse virksomhedsejer, som forventer meget af sin hjemmeside.

        </p>
        <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
        <button data-toggle="collapse" class="btn btn-primary price" data-target="#shopify">Se Priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>

      </div>
      <!-- Pricing -->
      <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
        <div id="shopify" class="collapse" style="margin-top: 15px; text-align: center;">
          <div class="container content">
            <div class="row" style="border: 3px solid #eee;">
              <div class="col-md-4" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Shopify
                    </h3>
                    <h4><i>Ydelser </i><i></i></h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      Installation af Shopify
                    </li>
                    <li>
                      Installation af tema
                    </li>
                    <li>
                      Mobiloptimering
                    </li>
                    <li>
                      Søgeoptimering
                    </li>
                    <li>
                      Op til 20 undersider
                    </li>
                    <li>
                      Mere end 20 undersider
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Plus
                    </h3>
                    <h4><i>DKK </i><i>12.000,-</i></h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4" style="padding:0px;">
                <div class="pricing hover-effect" style="border: 0;">
                  <div class="pricing-head">
                    <h3>Pro
                    </h3>
                    <h4><i>DKK </i><i>20.000,-</i>
                    </h4>
                  </div>
                  <ul class="pricing-content list-unstyled">
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                    <li>
                      <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//End Pricing -->
        <div class="container reasons" style="margin-top: 38px;">
          <h3 style="text-align: center; font-weight:lighter; margin-bottom: 27px;"> 5 Grunde til at vælge Shopify: </h3>
          <div class="process">
            <div class="process-row">
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">1</h4></button>
                <p> Vil have et meget nemt CMS system. </p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">2</h4></button>
                <p>Er en mellemstor webshop.</p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">3</h4></button>
                <p>Vil have adgang til mange plugins.</p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">4</h4></button>
                <p>Kun sælger i ét land.</p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">5</h4></button>
                <p>Ønsker god support, som er let at finde.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <a id="woo-link" class="jump-link"></a>

  <section id="overview">
    <div class="container">
      <div class="section-header">
      </div>
      <div class="row">

        <div class="col-sm-5" style="padding-top: 8%;">
          <h3 class="column-title">WooCommerce Webshop</h3>

          <p>Ved WooCommerce begiver vi os ud i den mere seriøse hjemmeside til iværksætteren med drømmen om en webshop. Ligesom WordPress er det utroligt let for dig at redigere i din hjemmeside, tilføje og redigere produkter med de nødvendige specifikationer, der passer til din webshop.

            <br></br>WooCommerce er meget fleksibelt, og kan derfor huse de fleste webshops. Sammenlignet med WordPress er funktionaliteten større med hensyn til tracking, betalingsmuligheder osv. Derfor anbefaler vi WooCommerce til små webshops.

          </p>
          <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
          <button data-toggle="collapse" class="btn btn-primary price" data-target="#woocommerce">Se Priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>

        </div>

        <div class="col-sm-7">
          <img class="img-responsive" src="{{asset('images/webshop/woocommerce.png')}}" alt="Woocommerce Webshop">
        </div>
        <!-- Pricing -->
        <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
          <div id="woocommerce" class="collapse" style="margin-top: 15px; text-align: center;">
            <div class="container content">
              <div class="row" style="border: 3px solid #eee;">
                <div class="col-md-3" style="padding:0px;">
                  <div class="pricing hover-effect" style="border: 0;">
                    <div class="pricing-head">
                      <h3>Woocommerce
                      </h3>
                      <h4><i>Ydelser </i><i></i></h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        Installation af Wordpress
                      </li>
                      <li>
                        Installation af Woocommerce
                      </li>
                      <li>
                        Installation af tema
                      </li>
                      <li>
                        Mobiloptimering
                      </li>
                      <li>
                        Søgeoptimering
                      </li>
                      <li>
                        Op til 20 undersider
                      </li>
                      <li>
                        Mere end 20 undersider
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3" style="padding:0px;">
                  <div class="pricing hover-effect" style="border: 0;">
                    <div class="pricing-head">
                      <h3>Basis
                      </h3>
                      <h4><i>DKK </i><i>4.500,-</i></h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-times" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-times" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-times" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-times" aria-hidden="true"></i>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3" style="padding:0px;">
                  <div class="pricing hover-effect" style="border: 0;">
                    <div class="pricing-head">
                      <h3>Plus
                      </h3>
                      <h4><i>DKK </i><i>12.000,-</i>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-times" aria-hidden="true"></i>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3" style="padding:0px;">
                  <div class="pricing hover-effect" style="border: 0;">
                    <div class="pricing-head">
                      <h3>Pro
                      </h3>
                      <h4><i>DKK </i><i>20.000,-</i>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                      <li>
                        <i class="fa fa-check" aria-hidden="true" style="color:#cd1959; font-size: 15px;"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//End Pricing -->
        <div class="container reasons" style="margin-top: 38px;">
          <h3 style="text-align: center; font-weight:lighter; margin-bottom: 27px;"> 5 Grunde til at vælge WooCommerce: </h3>
          <div class="process">
            <div class="process-row">
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">1</h4></button>
                <p> Vil have et meget nemt CMS. </p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">2</h4></button>
                <p>Er en lille webshop.</p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">3</h4></button>
                <p>Vil have adgang til mange plugins.</p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">4</h4></button>
                <p>Kun sælger i ét land.</p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">5</h4></button>
                <p>Måske i forvejen kender Wordpress.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('include.portfolio')

      @include('include.footer')

      @endsection
