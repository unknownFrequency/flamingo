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
      <img src="{{asset('images/websolutions/wordpress.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Wordpress Hjemmeside</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>

      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="{{asset('images/websolutions/bootstrap.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Bootstrap Hjemmeside</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="{{asset('images/websolutions/customkode.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Custom Kode</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

</div>

<h3> Webshops </h3>
<div class="row form-group product-chooser">



  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="{{asset('images/webshop/magento.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Magento Webshop</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>

      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="{{asset('images/webshop/shopify.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Shopify Webshop</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="{{asset('images/webshop/woocommerce.png')}}" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">WooCommerce Webshop</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

</div>

<div class="row">
  <div class="col">

  </div>
</div>
</div>
</section>


@include('include.portfolio')
@include('include.footer')

@endsection
