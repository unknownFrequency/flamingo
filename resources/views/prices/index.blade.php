@extends('include/layout')

@section('content')

<div class="slider section">
  <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
    <ol class="carousel-indicators">
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_webløsninger.jpg')}}" alt="First slide">
        <div class="carousel-caption">
          <h3 style="color: #333;">Priser</h3>
          <p style="color: #333;">Vi laver hjemmesider, der opfylder lige netop de krav du har.</p>
        </div>
      </div>
    </div>
  </div>
</div> <!-- Carousel -->
<section id="overview">
  <div class="container">
    <h3> Webløsninger </h3>

    <div class="row form-group product-chooser">



      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="{{asset('images/websolutions/wordpress_priser.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
          <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Wordpress Hjemmeside</span>
            <span class="description">WordPress er perfekt til dig, som vil i gang med din første hjemmeside. WordPress er for langt de fleste utroligt let at lære, og du vil selvstændigt kunne lave smårettelser på hjemmesiden.</span>
          </div>
          <div class="price-button">
            <button data-toggle="collapse" class="btn-price" data-target="#wordpress">Se fulde priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="{{asset('images/websolutions/bootstrap.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
          <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Bootstrap Hjemmeside</span>
            <span class="description">Vi sætter en ære i udelukkende at lave smukke hjemmesider, så vores kunder stolt kan vise den frem til deres kunder. Vi laver layoutet, som du ønsker det, og udvikler hjemmesiden med nøjagtigt det farvetema, der passer til din virksomheds visuelle identitet.</span>
          </div>
          <div class="price-button">
            <button data-toggle="collapse" class="btn-price" data-target="#wordpress">Modtag tilbud</button>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="{{asset('images/websolutions/customkode.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
          <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Custom Kode</span>
            <span class="description">Forskellige programmeringssprog har forskellige fordele. Derfor mestrer vi hos Flamingo Media flere teknologier, så din idé kan blive til virkelighed uden at du skal begrænses af temaer, plugins osv. </span>
          </div>
          <div class="price-button">
            <button class="btn-price" id="myBtn1">Modtag tilbud</button>
          </div>
        </div>
      </div>

    </div>
    <br>
    <hr>
  </br>
  <h3> Webshops </h3>
  <div class="row form-group product-chooser">



    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="product-chooser-item">
        <img src="{{asset('images/webshop/magento_priser1.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
        <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
          <span class="title">Magento Webshop</span>
          <span class="description">Magento er bygget til webshops, hvilket også betyder at vi anbefaler det til mellemstore til store virksomheder. Magento kan sagtens fungere til små webshops, men grundet det komplicerede CMS-system, anbefales det til store virksomheder, som får glæde at den store funktionalitet som Magento tilbyder.</span>
        </div>
        <div class="price-button">
          <button data-toggle="collapse" class="btn-price" data-target="#wordpress">Se fulde priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="product-chooser-item">
        <img src="{{asset('images/webshop/shopify_priser.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
        <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
          <span class="title">Shopify Webshop</span>
          <span class="description">Forskelligt fra de andre CMS-systemer skal der med Shopify betales et månedligt beløb for at bruge deres framework. Der er uendelige design – og opbygningsmuligheder, hvilket gør det perfekt til dig, som vil have din helt egen unikke webshop, og er villig til at betale mere for det.</span>
        </div>
        <div class="price-button">
          <button data-toggle="collapse" class="btn-price" data-target="#wordpress">Se fulde priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="product-chooser-item">
        <img src="{{asset('images/webshop/woocommerce_priser.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
        <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
          <span class="title">WooCommerce Webshop</span>
          <span class="description">Ved WooCommerce begiver vi os ud i den mere seriøse hjemmeside til iværksætteren med drømmen om en webshop. Ligesom WordPress er det utroligt let for dig at redigere i din hjemmeside, tilføje og redigere produkter med de nødvendige specifikationer, der passer til din webshop.</span>
        </div>
        <div class="price-button">
          <button data-toggle="collapse" class="btn-price" data-target="#wordpress">Se fulde priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>
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
            <img class="img-responsive" src="{{asset('images/tilbud.png')}}" alt="">

          </ul>
        </div>
      </div>
    </div>
    <div class="modal-footer">

    </div>
  </div>
</div>
@endsection
