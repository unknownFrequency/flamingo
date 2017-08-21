@extends('include/layout')

@section('content')

    <section class="slider">
        <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider1_foto.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <h3 style="color: #333;">Videoer der er til at forstå</h3>
                        <p style="color: #333;">Vi sætter ikke begrænsinger for jeres drømme, når det gælder video.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider2_foto.jpg')}}" alt="Second slide">
                    <div class="carousel-caption">
                        <h3>Det nyeste udstyr</h3>
                        <p>Vi har alt det nyeste udstyr, så vi kan producere meget høj kvalitet til vores kunder.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid ml-auto mr-auto" src="{{asset('images/slider/slider3_foto.jpg')}}" alt="Second slide">
                    <div class="carousel-caption">
                        <h3 style="color: #333;">Knivskarpe produktbilleder</h3>
                        <p style="color: #333;">Få unikke produktbilleder til netop din webshop.</p>
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
    </section> <!-- end Slider -->

    <!-- Foto -->
    <section id="overview">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Foto</h2>
                <p class="section-text">Vi har et fotostudie, hvor vi kan tage de fleste slags billeder. Dette dækker eksempelvis over personalefotos, unikke produktbilleder eller noget helt tredje. Du er velkommen til at kontakte os for mere information, og eventuelle specifikke ønsker.
                </p>
            </div>
        </div>
     <!-- end Foto -->

    <a class="jump-link" id="personalebilleder"></a>

    <!-- Personalebilleder -->
        <div class="container">
            <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/foto/personalefoto.png')}}" alt="">
                </div>

                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Personalebilleder</h3>

                    <p>
                        Flotte personalebilleder af dig og dine ansatte, signalerer kvalitet og professionalisme.
                        I vores fotostudie har vi mulighed for at skyde billeder af dig i høj opløsning og høj kvalitet.
                        Vi redigerer billederne som du ønsker, så dit visitkort eller dine billeder på hjemmesiden hard et
                        visuelle udtryk du vil have. Vi tilbyder også on-shoot location, hvis du foretrækker at skyde
                        billederne i din virksomhed.
                    </p>
                    <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
                </div>
            </div>
        </div>
    <!-- end Personalebilleder -->

    <a class="jump-link" id="produktbilleder"></a>

    <!-- Produktbilleder -->
        <div class="container">
            <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">
                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Produktbilleder</h3>

                    <p>
                        Sælger du forskellige produkter fra flere forskellige producenter,
                        vil dine billeder på hjemmesiden have forskellige udtryk. Tager man sine egne produktbilleder,
                        kan man for det første tillægge billederne sin helt egen stil, men man opnår også en ensartethed,
                        og en meget høj kvalitet på billederne. I vores eget fotostudie kan vi tage produktbilleder
                        på flere forskellige baggrundsfaver.
                    </p>
                    <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
                </div>

                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/foto/produktfoto.png')}}" alt="">
                </div>
            </div>
        </div>
    <!-- end Produktbilleder -->

    <!-- Andre fotoopgaver -->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/foto/andrefoto.png')}}" alt="">
                </div>

                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Andre Fotoopgaver</h3>

                    <p>
                        Vi tager mange forskellige former for fotoopgaver, og er altid åbne for nye opgaver og udfordringer.
                        Kontakt os med netop dit ønske, så vi kan drøfte dine idéer.
                    </p>
                    <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
                </div>
            </div>
        </div>
        </section>
  <!-- end Fotoopgaver -->

    <a class="jump-link" id="produktbilleder"></a>

    <!-- Video -->
    <section id="overview">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Video</h2>
                <p class="section-text">Vi elsker videoer, og er glade for vi har muligheden for at lave dem i samarbejde med vores kunder. Vi kan eksempevis lave produktvideoer, reklamevideoer eller en profilvideo til din virksomhed. Du er velkommen til at kontakte os, hvis du har specifikke idéer eller ønsker.
                </p>
            </div>
            <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/foto/produktvideo.png')}}" alt="">
                </div>
                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Produktvideo</h3>

                    <p>Video er et rigtig godt værktøj til at vise dine produkter fra flere forskellige sider, så kunden kan se hele produktet og bedre beslutte sig. Vi har udstyret til at få dine produkter til at ligne en million, så du kan komme foran dine konkurrenter. Vi tilbyder mange forskellige former for produktvideoer, alt lige video på slider, drejeskive, samleguides og så videre.

                    </p>
                    <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>

                </div>
            </div>
        </div>

  <!-- end Video -->

    <a class="jump-link" id="reklamevideo"></a>

    <!-- Reklamevideo -->
        <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px; margin-left: 280px;">
            <div class="col-sm-5" style="padding-top: 8%;">
                <h3 class="column-title">Reklamevideo</h3>

                <p>
                    Vi laver næsten alle slags videoer til brug på sociale medier, som du kan bruge i din
                    markedsføring. Vi kan styre hele processen fra idégenerering til færdigt product, eller
                    virkeliggøre netop den idé du har. Det eneste, der er vigtigt for os, er at I er tilfredse
                    med det færdige produkt, og at det skaber den opmærksomhed, du ønsker.
                </p>
                <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
            </div>

            <div class="col-sm-7">
                <img class="img-responsive" src="{{asset('images/foto/reklamevideo.png')}}" alt="">
            </div>
        </div>
    <!-- end Reklamevideo -->

    <a class="jump-link" id="profilvideo"></a>

    <!-- profilvideo -->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <img class="img-responsive" src="{{asset('images/foto/profilvideo.png')}}" alt="">
                </div>

                <div class="col-sm-5" style="padding-top: 8%;">
                    <h3 class="column-title">Profil Video</h3>

                    <p>
                        En god profilvideo til din virksomhed er med til at øge SEO-værdien, og kan i høj grad
                        forbedre din troværdighed, så dine kommende kunder er mere trygge ved at handle hos dig.
                        Du får mulighed for at fortælle om dine produkter eller ydelser, og give det gode indtryk
                        dine kunder har brug for. Profilvideoerne skydes typisk i din egen virksomhed, så du er i
                        dine vante omgivelser, og kan vise nøjagtigt hvem I er som virksomhed.
                    </p>
                    <button class="myBtn" id="myBtn2">Få et uforpligtende tilbud</button>
                </div>
            </div>
        </div>
    </section><!-- end profilvideo   -->

    @include('include.portfolio')
    @include('include.footer')

@endsection
