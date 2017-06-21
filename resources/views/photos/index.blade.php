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
<section>

  <section id="overview">
      <div class="container">
        <div class="section-header">
            <h2 class="section-title">Foto</h2>
            <p class="section-text">Vi har et fotostudie, hvor vi kan tage de fleste slags billeder. Dette dækker eksempelvis over personalefotos, unikke produktbilleder eller noget helt tredje. Du er velkommen til at kontakte os for mere information, og eventuelle specifikke ønsker.
    </p>
        </div>
        <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">
            <div class="col-sm-7">
              <img class="img-responsive" src="{{asset('images/foto/personalefoto.png')}}" alt="">
            </div>
            <div class="col-sm-5" style="padding-top: 8%;">
                <h3 class="column-title">Personalebilleder</h3>

                <p>Flotte personalebilleder af dig og dine ansatte, signalerer kvalitet og professionalisme. I vores fotostudie har vi mulighed for at skyde billeder af dig i høj opløsning og høj kvalitet. Vi redigerer billederne som du ønsker, så dit visitkort eller dine billeder på hjemmesiden hard et visuelle udtryk du vil have. Vi tilbyder også on-shoot location, hvis du foretrækker at skyde billederne i din virksomhed.

                </p>
                <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

            </div>
        </div>
        <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">

            <div class="col-sm-5" style="padding-top: 8%;">
                <h3 class="column-title">Produktbilleder</h3>

                <p>Sælger du forskellige produkter fra flere forskellige producenter, vil dine billeder på hjemmesiden have forskellige udtryk. Tager man sine egne produktbilleder, kan man for det første tillægge billederne sin helt egen stil, men man opnår også en ensartethed, og en meget høj kvalitet på billederne. I vores eget fotostudie kan vi tage produktbilleder på flere forskellige baggrundsfaver.

                </p>
                <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

            </div>
            <div class="col-sm-7">
              <img class="img-responsive" src="{{asset('images/foto/produktfoto.png')}}" alt="">
            </div>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/foto/andrefoto.png')}}" alt="">
          </div>
            <div class="col-sm-5" style="padding-top: 8%;">
                <h3 class="column-title">Andre Fotoopgaver</h3>

                <p>Vi tager mange forskellige former for fotoopgaver, og er altid åbne for nye opgaver og udfordringer. Kontakt os med netop dit ønske, så vi kan drøfte dine idéer.
                </p>
                <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

            </div>

        </div>
      </div>
  </section>

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
                <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

            </div>
        </div>
        <div class="row" style="border-bottom: 1px #eee solid; margin-bottom: 42px;">

            <div class="col-sm-5" style="padding-top: 8%;">
                <h3 class="column-title">Reklamevideo</h3>

                <p>Vi laver næsten alle slags videoer til brug på sociale medier, som du kan bruge i din markedsføring. Vi kan styre hele processen fra idégenerering til færdigt product, eller virkeliggøre netop den idé du har. Det eneste, der er vigtigt for os, er at I er tilfredse med det færdige produkt, og at det skaber den opmærksomhed, du ønsker.

                </p>
                <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

            </div>
            <div class="col-sm-7">
              <img class="img-responsive" src="{{asset('images/foto/reklamevideo.png')}}" alt="">
            </div>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <img class="img-responsive" src="{{asset('images/foto/profilvideo.png')}}" alt="">
          </div>
            <div class="col-sm-5" style="padding-top: 8%;">
                <h3 class="column-title">Profil Video</h3>

                <p>En god profilvideo til din virksomhed er med til at øge SEO-værdien, og kan i høj grad forbedre din troværdighed, så dine kommende kunder er mere trygge ved at handle hos dig. Du får mulighed for at fortælle om dine produkter eller ydelser, og give det gode indtryk dine kunder har brug for. Profilvideoerne skydes typisk i din egen virksomhed, så du er i dine vante omgivelser, og kan vise nøjagtigt hvem I er som virksomhed.
                </p>
                <a class="btn btn-primary" href="#">Få et uforpligtende tilbud</a>

            </div>

        </div>
      </div>
  </section>

  <section id="portfolio">
    <div class="row nomargin">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/freqenz_case.png')}}" alt="Frisør Freqenz"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/freqenz_logo.png')}}" alt="Frisør Freqenz"><h1>Frisør Freqenz</h1><hr><p>For Frisør Frequenz har vi taget professionelle modelbilleder til hjemmesiden.</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/hshop_case.png')}}" alt="Hshop"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/hshop_logo.png')}}" alt="Hshop Logo"><h1>Hshop.dk</h1><hr><p>For Hshop har vi udviklet alt fra magentosite, logo, produktbilleder, produktvideoer, markedsføring og et internt lagersystem.</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/dhf_case.png')}}" alt="DHF"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/dhf_logo.png')}}" alt="DHF Logo"><h1>DHF</h1><hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/sundhedmedmening_case.png')}}" alt="Sundhed Med Mening"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/sundhedmedmening_logo.png')}}" alt="Sundhed Med Mening Logo"><h1>Sundhed Med Mening</h1><hr><p>Vi har lavet en hjemmeside for sundhedmedmening, der primært bruges som bookingkanal for virksomheden. </p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/göteborg_case.png')}}" alt="Göteborg BHC"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/göteborg_logo.png')}}" alt="Göteborg BHC"><h1>Göteborg BHC</h1><hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p> </div></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="setLocation('/resultater/5-green-comfort-a-s');" style="padding: 0px;">
          <div class="portfolio-image"><img src="{{asset('images/portfolio/h-outlet_case.png')}}" alt="H-Outlet"></div>
          <div class="portfolio-overlay"><div class="portfolio-text"><img src="{{asset('images/portfolio/outlet_logo.png')}}" alt="H-Outlet Logo"><h1>H-outlet.dk</h1><hr><p>For H-outlet har vi udviklet et e-commerce site med logo, produktbilleder, produktvideoer og et internt lagersystem.</p> </div></div>
        </div>
    </div>
  </section>

  @include('include.footer')

  @endsection
