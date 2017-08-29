<div class="nav-side-menu fixed-top">
    <div class="brand"><a class="navbar-brand" style="padding-top: 0.7rem;"href="{{ URL::to('/') }}"><img src={{asset('images/FlamingoLogoDONEDONE.png')}} alt="Flamingo Media Logo"></a></div>
    <i class="fa fa-bars fa-2x toggle-btn" style="color: #cd1958; font-size:30px;" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li class="active">
                  <a href="tel:+4581815656">
                  <i class="fa fa-phone"></i> 81 81 56 56 - Ring og få gratis tilbud
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#websolutions" class="collapsed">
                  <a href="#"><i class="fa fa-sitemap"></i> Webløsninger <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="websolutions">
                    <li><a href="/weblosninger#wordpress-link">Wordpress</a></li>
                    <li><a href="/weblosninger#bootstrap-link">Bootstrap</a></li>
                    <li><a href="/weblosninger#seo-link">Søgeoptimering</a></li>
                    <li><a href="/weblosninger#custom-link">Custom Kode</a></li>
                </ul>


                <li  data-toggle="collapse" data-target="#webshops" class="collapsed">
                  <a href="#"><i class="fa fa-shopping-cart"></i> Webshops<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="webshops">
                    <li><a href="/webshops#magento-link">Magento</a></li>
                    <li><a href="/webshops#woo-link">Woocommerce</a></li>
                    <li><a href="/webshops#shopify-link">Shopify</a></li>
                </ul>


                <li  data-toggle="collapse" data-target="#graphics" class="collapsed">
                  <a href="#"><i class="fa fa-paint-brush"></i> Grafisk Arbejde<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="graphics">
                    <li><a href="/grafik#logo">Logo</a></li>
                    <li><a href="/grafik#webdesign">Webdesign</a></li>
                    <li><a href="/grafik#tryksager">Tryksager</a></li>
                    <li><a href="/grafik#print">Print</a></li>
                    <li><a href="/grafik#visitkort">Visitkort</a></li>
                </ul>

                <li  data-toggle="collapse" data-target="#foto_video" class="collapsed">
                  <a href="#"><i class="fa fa-camera"></i> Foto/Video<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="foto_video">
                    <li><a href="/foto#personalebilleder">Personalebilleder</a></li>
                    <li><a href="/foto#produktbilleder">Produktbilleder</a></li>
                    <li><a href="/foto#produktvideo">Produktvideo</a></li>
                    <li><a href="/foto#reklamevideo">Reklamevideo</a></li>
                    <li><a href="/foto#profilvideo">Profilvideo</a></li>
                </ul>

                <li>
                 <a href="{{ URL::to('/priser') }}">
                 <i class="fa fa-money"></i> Priser
                 </a>
                 </li>

                 <li>
                  <a href="{{ URL::to('/posts') }}">
                  <i class="fa fa-file-text"></i> Blog
                  </a>
                  </li>

                  <li>
                   <a href="{{ URL::to('/kontakt') }}">
                   <i class="fa fa-users"></i> Kontakt
                   </a>
                   </li>

                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Din Profil
                  </a>
                  </li>

            </ul>
     </div>
</div>
