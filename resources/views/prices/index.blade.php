@extends('include/layout')

@section('content')
<section id="overview">
    <div class="container">
      <h3> Priser </h3>

<div class="row form-group product-chooser">

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item selected">
      <img src="http://renswijnmalen.nl/bootstrap/desktop_mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Hjemmesider</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="http://renswijnmalen.nl/bootstrap/desktop.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Desktop</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="http://renswijnmalen.nl/bootstrap/mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Mobile</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="product-chooser-item">
      <img src="http://renswijnmalen.nl/bootstrap/mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
        <span class="title">Mobile</span>
        <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>

</div>
</div>
</section>


@include('include.portfolio')
@include('include.footer')

@endsection
