@extends('include/layout')
@section('content')
<section class="video-section">
  <div class="video">
    <video autoplay="auto" loop="loop" muted="true"
    poster="/~/media/nybolig/billeder/forside/barnpaagynge-jpg.jpg" src="{{asset('video/Vranjes.mp4')}}">
    </video>
    <div class="overlay-video"></div>
  </div>
  <div class="text-wrapper">
    <h1> Hjemmesider der er til at forstå </h1>
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
@endsection
