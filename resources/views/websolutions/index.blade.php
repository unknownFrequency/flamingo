@extends('include/layout')

@section('content')

    <div class="slider section">
        <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_webløsninger.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <h3 style="color: #333;">Webløsninger på flere platforme</h3>
                        <p style="color: #333;">Vi laver hjemmesider, der opfylder lige netop de krav du har.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider2_webløsninger.jpg')}}" alt="Second slide">
                    <div class="carousel-caption">
                        <h3>Ingen begrænsninger</h3>
                        <p>Vi kan kode i rigtig mange forskellige sprog, så du altid er sikker på at få det bedste.</p>
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
    </div> <!-- Carousel -->

    <section id="overview">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Webløsninger</h2>
                <p class="section-text">Vi er et bureau med brede kompetencer, og vi er ikke tilfredse, før du er. Hos os får du mulighed for at købe en samlet pakke,<br> så du ikke skal overlade din virksomheds visuelle identitet til tilfældigheder.
                </p>
            </div>
        </div>
    </div>


    <a id="wordpress-link" style="padding-top:100px;"></a>

    <!-- Wordpress -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/websolutions/wordpress.png')}}" alt="">
                </div>
                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Wordpress Hjemmeside</h3>

                    <p>WordPress er perfekt til dig, som vil i gang med din første hjemmeside. WordPress er for langt de fleste utroligt let at lære, og du vil selvstændigt kunne lave smårettelser på hjemmesiden. Vi anbefaler altid WordPress til den simple hjemmeside, fordi det for dig er det letteste på sigt. Der er utallige plugins og temaer at vælge mellem, som også for dig betyder at prisen kan holdes nede.

                        <br />WordPress holder altid sig selv opdateret det gør ligeledes de installerede plugins. Det betyder et minimum af vedligeholdelse for dig, så du i stedet kan fokusere på det du er god til.

                        WordPress er som udgangspunkt desuden meget SEO-venligt, hvilket betyder at dine kunder og potentielle kunder kan finde dig.

                        Det typiske WordPress site vil være et infosite, blog, galleri, portfolio, en lille webshop eller lige præcis det du ønsker.

                    </p>
                    <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>
                    <button data-toggle="collapse" class="btn btn-primary price" data-target="#wordpress">Se Priser <i class="caret-icon fa fa-caret-down" aria-hidden="true"></i></button>
                </div>
                <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
                    <div id="wordpress" class="collapse" style="margin-top: 15px; text-align: center;">
                        <!-- Pricing -->
                        <div class="container content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>Basis <span>
                              Standard opsætning </span>
                                            </h3>
                                            <h4><i>DKK </i><i>4.000,-</i></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>
                                                Installation af Wordpress
                                            </li>
                                            <li>
                                                Installation af tema
                                            </li>
                                            <li>
                                                Fusce condimentum
                                            </li>
                                            <li>
                                                Ut non libero
                                            </li>
                                            <li>
                                                Consecte adiping elit
                                            </li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>Plus <span>
                              Tekst her </span>
                                            </h3>
                                            <h4><i>DKK </i><i>12.000,-</i>
                                            </h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>
                                                Installation af Wordpress
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
                                        </ul>
                                        <div class="pricing-footer">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing pricing-active hover-effect">
                                        <div class="pricing-head pricing-head-active">
                                            <h3>Pro<span>
                              Tekst her </span>
                                            </h3>
                                            <h4><i>DKK </i><i>20.000,-</i>
                                            </h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>
                                                Installation af Wordpress
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
                                                Mere end 20 undersider
                                            </li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                            </p>
                                        </div>
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
            <h3 style="text-align: center; font-weight:lighter; margin-bottom: 27px;"> 5 Grunde til at vælge Wordpress: </h3>
            <div class="process">
                <div class="process-row">
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">1</h4></button>
                        <p> Vil have et CMS til din nye hjemmeside. </p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">2</h4></button>
                        <p>Har ansatte der skal have adgang til at redigere i din hjemmeside.</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">3</h4></button>
                        <p>Vil have adgang til mange plugins.</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">4</h4></button>
                        <p>Vil have adgang til mange temaer, så du kan vælge hvad du synes er pænt.</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">5</h4></button>
                        <p>Ikke er en webshop.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end Wordpress -->
  </section>

    <a id="bootstrap-link" style="padding-top:100px;"></a>

    <!-- Bootstrap -->
    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Bootstrap Hjemmeside</h3>

                    <p>Vi sætter en ære i udelukkende at lave smukke hjemmesider, så vores kunder stolt kan vise den frem til deres kunder. Vi laver layoutet, som du ønsker det, og udvikler hjemmesiden med nøjagtigt det farmetema, der passer til din virksomheds visuelle identitet. Vi har dygtiggjort os inden for alle former for webdesign, og kan derfor altid tilbyde en fuldstændig pakke.
                    </p>
                    <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>
                    <button data-toggle="collapse" class="btn btn-primary price" data-target="#bootstrap">Se Priser <i class="fa fa-caret-down" aria-hidden="true"></i></button>

                </div>
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/websolutions/bootstrap.png')}}" alt="">
                </div>

            </div>
            <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
                <div id="bootstrap" class="collapse" style="margin-top: 15px; text-align: center;">
                    <!-- Pricing -->
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing hover-effect">
                                    <div class="pricing-head">
                                        <h3>Basis <span>
                        Standard opsætning </span>
                                        </h3>
                                        <h4><i>DKK </i><i>4.000,-</i></h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            Installation af Wordpress
                                        </li>
                                        <li>
                                            Installation af tema
                                        </li>
                                        <li>
                                            Fusce condimentum
                                        </li>
                                        <li>
                                            Ut non libero
                                        </li>
                                        <li>
                                            Consecte adiping elit
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn yellow-crusta">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing hover-effect">
                                    <div class="pricing-head">
                                        <h3>Plus <span>
                        Tekst her </span>
                                        </h3>
                                        <h4><i>DKK </i><i>12.000,-</i>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            Installation af Wordpress
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
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn yellow-crusta">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing pricing-active hover-effect">
                                    <div class="pricing-head pricing-head-active">
                                        <h3>Luksus<span>
                        Tekst her </span>
                                        </h3>
                                        <h4><i>DKK </i><i>20.000,-</i>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            Installation af Wordpress
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
                                            Mere end 20 undersider
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn yellow-crusta">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//End Pricing -->
            </div>
        </div>

        <div class="container reasons" style="margin-top: 38px;">
            <h3 style="text-align: center; font-weight:lighter; margin-bottom: 27px;"> 5 Grunde til at vælge Bootstrap: </h3>
            <div class="process">
                <div class="process-row">
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">1</h4></button>
                        <p> Vil have en hjemmeside udviklet fra bunden, så ingen andre ligner din. </p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">2</h4></button>
                        <p>Vil have en hjemmeside, der fungerer på alle tænkelige platforme.</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">3</h4></button>
                        <p>Vil have en hjemmeside, der kan udvikles helt uden begrænsninger til layout og design.</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">4</h4></button>
                        <p>Rigtig god seo, fordi du selv helt i kontrol over, hvad der er på din hjemmeside.</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-success btn-circle"><h4 style="margin: 0 auto;">5</h4></button>
                        <p>Vil have en meget hurtig hjemmeside, med meget lave loadtider.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </div> <!-- end Bootstrap -->
    <a id="seo-link" style="padding-top:100px;"></a>

    <!-- SEO -->
    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/websolutions/wordpress.png')}}" alt="">
                </div>
                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Søgeoptimering</h3>

                    <p>Dit logo er det første dine kunder, stifter bekendtskab med. Det er det vigtigste element i din visuelle identitet, og det er det, du bliver husket på. Derfor er det vigtigt, at logoet sidder helt i skabet, så du et letgenkendelig. Vi kan tegne et logo, der er din virksomhed værdig, og som vil komme til at fremstå helt skarp på din hjemmeside eller dine print.
                    </p>
                    <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>
                    <button data-toggle="collapse" class="btn btn-primary price" data-target="#seo">Se Priser <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
                <div id="seo" class="collapse" style="margin-top: 15px; text-align: center;">
                    <!-- Pricing -->
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing hover-effect">
                                    <div class="pricing-head">
                                        <h3>Basis <span>
                            Standard opsætning </span>
                                        </h3>
                                        <h4><i>DKK </i><i>4.000,-</i></h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            Installation af Wordpress
                                        </li>
                                        <li>
                                            Installation af tema
                                        </li>
                                        <li>
                                            Fusce condimentum
                                        </li>
                                        <li>
                                            Ut non libero
                                        </li>
                                        <li>
                                            Consecte adiping elit
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn yellow-crusta">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing hover-effect">
                                    <div class="pricing-head">
                                        <h3>Plus <span>
                            Tekst her </span>
                                        </h3>
                                        <h4><i>DKK </i><i>12.000,-</i>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            Installation af Wordpress
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
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn yellow-crusta">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing pricing-active hover-effect">
                                    <div class="pricing-head pricing-head-active">
                                        <h3>Luksus<span>
                            Tekst her </span>
                                        </h3>
                                        <h4><i>DKK </i><i>20.000,-</i>
                                        </h4>
                                    </div>
                                    <ul class="pricing-content list-unstyled">
                                        <li>
                                            Installation af Wordpress
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
                                            Mere end 20 undersider
                                        </li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                        </p>
                                        <a href="javascript:;" class="btn yellow-crusta">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//End Pricing -->
            </div>
        </div>
    </div>
      </section>


    <a id="custom-link" style="padding-top:100px;"></a>

    <!-- Custom kode -->
    <section id="overview">
        <div class="container">
            <div class="section-header">
            </div>
            <div class="row">
                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Custom Kode</h3>

                    <p>
                        Forskellige programmeringssprog har forskellige fordele. Derfor mestrer vi hos Flamingo Media flere teknologier,
                        så din idé kan blive til virkelighed uden at du skal begrænses af temaer, plugins osv. Med en "Custom kode" løsning kan du få dit
                        website præcist som du ønsker.
                    </p>
                    <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>
                    <button data-toggle="collapse" class="btn btn-primary price" data-target="#">Se Priser <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                </div>

                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/websolutions/customkode.png')}}" alt="">
                </div>

                <div class="priser" style="padding-top: 45px; padding-bottom: 20px;">
                    <div id="custom" class="collapse" style="margin-top: 15px; text-align: center;">
                        <!-- Pricing -->
                        <div class="container content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>Basis <span>
                            Standard opsætning </span>
                                            </h3>
                                            <h4><i>DKK </i><i>4.000,-</i></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>
                                                Installation af Wordpress
                                            </li>
                                            <li>
                                                Installation af tema
                                            </li>
                                            <li>
                                                Fusce condimentum
                                            </li>
                                            <li>
                                                Ut non libero
                                            </li>
                                            <li>
                                                Consecte adiping elit
                                            </li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                            </p>
                                            <a href="javascript:;" class="btn yellow-crusta">
                                                Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>Plus <span>
                            Tekst her </span>
                                            </h3>
                                            <h4><i>DKK </i><i>12.000,-</i>
                                            </h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>
                                                Installation af Wordpress
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
                                        </ul>
                                        <div class="pricing-footer">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                            </p>
                                            <a href="javascript:;" class="btn yellow-crusta">
                                                Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing pricing-active hover-effect">
                                        <div class="pricing-head pricing-head-active">
                                            <h3>Luksus<span>
                            Tekst her </span>
                                            </h3>
                                            <h4><i>DKK </i><i>20.000,-</i>
                                            </h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>
                                                Installation af Wordpress
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
                                                Mere end 20 undersider
                                            </li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                            </p>
                                            <a href="javascript:;" class="btn yellow-crusta">
                                                Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//End Pricing -->
                </div>
            </div>
        </div>
    </div>
</section>
    @include('include.portfolio')
    @include('include.footer')

@endsection
