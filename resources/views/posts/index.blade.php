@extends('include/layout')

@section('content')

<section class="slider">
  <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" style="box-shadow: 0px -1px 7px #888888; z-index: 1;" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_blog.jpg')}}" alt="First slide">
          <div class="carousel-caption">
            <h3>Blog</h3>
            <p>Her holder vi jer opdateret om alle de nyeste trends og muligheder inden for webdesign - og alt det andet vi interesserer os for.</p>
          </div>
      </div>
    </div>
  </div>
</section>

<section style="background-color: #fff;">
  <div class="container">
    <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
      {{--@include('posts/include/sidebar')--}}
          @foreach($posts as $post)
              @include('posts/post')
          @endforeach
      </div>
    </div>
  </div>
</section>

@include('include.footer')
@endsection
