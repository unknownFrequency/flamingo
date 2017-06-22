@extends('include/layout')

@section('content')

<section class="slider">
  <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" style="box-shadow: 0px -1px 7px #888888;" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_foto.jpg')}}" alt="First slide">
          <div class="carousel-caption">
            <h3 style="color: #333;">Blog</h3>
            <p style="color: #333;">Vi sætter ikke begrænsinger for jeres drømme, når det gælder video.</p>
          </div>
      </div>
    </div>
  </div>
<section>

    {{--@include('posts/include/sidebar')--}}
    <div class="text-center" style="padding-top:40px; background-color: #fff;">
        @foreach($posts as $post)
            @include('posts/post')
        @endforeach
    </div>

@include('include.footer')
@endsection
