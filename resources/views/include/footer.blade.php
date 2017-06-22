<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="logo"><span class="header-highlight">Flamingo</span> #Media</h2>
                <h4 class="widget-title">Følg os:</h4>
                 <ul class="social-nav">
                     <li><a href="#" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#" target="_blank" title="Linkedin" rel="nofollow" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                 </ul>
            </div>
            <div class="col-sm-3">
                <h5>Vores Produkter</h5>
                    <li><a href="{{ URL::to('/weblosninger') }}">Webløsninger</a></li>
                    <li><a href="{{ URL::to('/webshops') }}">Webshops</a></li>
                    <li><a href="{{ URL::to('/grafik') }}">Grafisk Arbejde</a></li>
                    <li><a href="{{ URL::to('/foto') }}">Foto/Video</a></li>
            </div>
            <div class="col-sm-3">
                <h5>Kontaktinformation</h5>
                    <p>Flamingomedia Aps<br>P. Hiort-Lorenzens Vej 4<br>8000 Aarhus C</p>
                    <p>Telefon: <a href="tel:+4556568181">+45 56 56 81 81</a></p>
                    <p>Email: <a href="mailto:info@flamingomedia.dk?Subject=Hej%20Flamingoer" target="_top">info@flamingomedia.dk</a></p>

            </div>
            <div class="col-sm-3">
                <div>
                  <h5>Bliv Kontaktet</h5>
                  <p> Vi kontakter dig indenfor 24 timer. </p>
                    @include('include/sms_form')
                </div>

            </div>
        </div>
    </div>
    <hr class="footer-line">
    <div class="footer-copyright">
        <p>© Flamingo Media - CVR: 37215856</p>
    </div>
</footer>
