<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flamingo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/YTPlayer.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">

<body id="home" class="homepage">

<header id="top-header" class="navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a class="smooth-scroll" data-section="#home" href="#home" >
                    <img src="images/FlamingoLogoDONEDONE.png" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>


        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">

                <ul id="nav" class="nav navbar-nav">
                    <li class="scroll"><a href="#home" data-section="#home">Forside</a></li>
                    <li class="scroll"><a href="#about" data-section="#about">Om os</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produkter
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Webløsninger</a></li>
                            <li><a href="#">Markedsføring</a></li>
                            <li><a href="#">Grafisk Materiale</a></li>
                            <li><a href="#">Foto/Video</a></li>
                        </ul>
                    </li>
                    <li class="scroll"><a href="#services" data-section="#services">Priser</a></li>
                    <li class="scroll"><a href="#contact-area" data-section="#contact-area">Blog</a></li>
                    <li class="scroll"><a href="#portfolio" data-section="#portfolio">Kontakt</a></li>
                    <li class="scroll"><a href="#portfolio" data-section="auth/login">Login</a></li>
                </ul>
                <button class="btn btn-danger navbar-btn">FÅ ET TILBUD</button>

            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>


<!--Video Section-->
<section class="content-section video-section">
    <div class="pattern-overlay">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=fdJc1_IBKJA',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Hjemmesider der er til at forstå</h3>
                    <div class="VideoKnapper">
                        <a class="btn btn-primary btn-lg" href="#">Hjemmeside</a>
                        <a class="btn btn-primary btn-lg" href="#">Webshop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video Section Ends Here-->


<section id="main-slider">
    <div class="owl-carousel">
        <div class="item" style="background-image: url(images/slider/bg1.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel-content text-center">
                                <h2>Accessible design is good design. Only with <span>Color</span>.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                <a class="btn btn-primary btn-lg" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url(images/slider/bg2.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel-content text-center">

                                <h2>OUR MAIN GOAL IS CONTINUOUSLY SATISFY OUR <span>Clients</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                <a class="btn btn-primary btn-lg" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url(images/slider/bg3.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel-content text-center">
                                <h2>Accessible design is good design. Only with <span>Color</span>.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                <a class="btn btn-primary btn-lg" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->

    </div><!--/.owl-carousel-->
</section><!--/#main-slider-->

<section id="about">
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Velkommen til Flamingo Media</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">


            <div class="col-sm-6 wow fadeInRight">
                <h3 class="column-title">Kort om os</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <a class="btn btn-primary" href="#">Læs mere om os</a>

            </div>
            <div class="col-sm-6 wow fadeInLeft">
                <img class="img-responsive" src="images/webnow-email-team.png" alt="">
            </div>
        </div>
    </div>
</section><!--/#about-->



<section id="features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Uendelige muligheder</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div id="exTab1" class="productcontainer">
            <ul  class="nav nav-pills">
                <li class="active">
                    <a  href="#1a" data-toggle="tab">Overview</a>
                </li>
                <li><a href="#2a" data-toggle="tab">Using nav-pills</a>
                </li>
                <li><a href="#3a" data-toggle="tab">Applying clearfix</a>
                </li>
                <li><a href="#4a" data-toggle="tab">Background color</a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <h3>Content's background color is the same for the tab</h3>
                </div>
                <div class="tab-pane" id="2a">
                    <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                </div>
                <div class="tab-pane" id="3a">
                    <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                </div>
                <div class="tab-pane" id="4a">
                    <h3>We use css to change the background color of the content to be equal to the tab</h3>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="cta2">
    <div class="container">
        <div class="text-center">
            <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">Hjemmesider der er til at <span>FORSTÅ</span></h2>
            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">I samarbejde med vores kunder, finder vi en løsning der passer perfekt til den enkelte. </p>
            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Læs mere</a></p>
        </div>
    </div>
</section>

<section id="services" >
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Vores arbejdsproces</h2>
            <p class="text-center wow fadeInDown">Samarbejder med vores kunder fra start til slut..</p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-bicycle"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <h3 class="features-title font-alt">SEO Services</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-connectdevelop"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa  fa-diamond"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-key"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-paw"></i>
                        </div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>

            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Tidligere Projekter</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">
                <li><a class="active" href="#" data-filter="*">Alle Projekter</a></li>
                <li><a href="#" data-filter=".animation">Grafisk Arbejde</a></li>
                <li><a href="#" data-filter=".Business">Hjemmesider</a></li>
                <li><a href="#" data-filter=".art">Foto/Video</a></li>
            </ul><!--/#portfolio-filter-->
        </div>

        <div class="portfolio-items">
            <div class="portfolio-item animation">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/01.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Sundhed Med Mening</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">
                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->


            <div class="portfolio-item Business art">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 2</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">
                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item animation">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 3</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">

                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item Business">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 4</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">

                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item animation art">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 5</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">

                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item Business">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 5</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">

                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item animation art">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 7</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">

                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item Business">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 8</h3>
                        <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto">
                            <img src="images/portfolio/expand.png" alt="">

                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->
        </div>
    </div><!--/.container-->
</section><!--/#portfolio-->







<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                            <h4>Louise S. Morgan</h4>
                            <small>Treatment, storage, and disposal (TSD) worker</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="item">
                            <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                            <h4>Louise S. Morgan</h4>
                            <small>Treatment, storage, and disposal (TSD) worker</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div class="btns">
                        <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#testimonial-->





<section id="contact-area">
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Send Message</h2>
                <p class="text-center wow fadeInDown animated" style="visibility: visible;">Drop a line to us. Your word is most important to us.</p>
            </div>
            <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">

                    <div class="form-group">
                        <label for="name">Your Name (Required)</label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    </div>

                </div>
                <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="text-center">

                    <button type="submit" class="btn btn-primary btn-lg btn-send-msg">Send Message</button>

                </div>

            </form>

        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center">
                    @FlamingoMedia
                </p>

                <ul class="social-icons text-center">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script src="inc/jquery.mb.YTPlayer.js"></script>
<script>
    $(document).ready(function () {

        $(".player").mb_YTPlayer();

    });

    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });
</script>

</body>
</html>

</html>

