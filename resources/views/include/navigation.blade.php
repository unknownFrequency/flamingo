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
                    <img src="<?= url('/') ?>/images/FlamingoLogoDONEDONE.png" alt="Flamingo">
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
