@extends('include/layout')

@section('content')

<section class="contact-page">
  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Kontakt os - <small>og få et uforpligtende tilbud!</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="POST" action="/kontakt">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Navn</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Udfyld navn" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Adresse</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Udfyld email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Område</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Vælg venligst en:</option>
                                    <option value="service">Webløsning</option>
                                    <option value="suggestions">Webshop</option>
                                    <option value="product">Grafisk Arbejde</option>
                                    <option value="photo">Foto/Video</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Besked</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="Skriv her"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Besked</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Vores kontor:</legend>
            <address>
                <strong>Flamingomedia Aps</strong><br>
                P. Hiort-Lorenzens Vej 4<br>
                8000, Arhus C<br>
                <abbr title="Phone">
                  </abbr>
                56 56 81 81
            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:#">info@flamingomedia.dk</a>
            </address>
            </form>
        </div>
    </div>
</div>

</section>

<!--Personale information -->
<section class="contact-page">
  <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin: 0 auto;">
                  <div class="card">
                      <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                      <div class="card-block">
                          <h4 class="card-title">Christopher Mørk</h4>
                          <div class="meta">
                              <p>Designer - Projektleder</p>
                          </div>
                          <div class="card-text">
                              Tawshif is a web designer living in Bangladesh.
                          </div>
                      </div>
                      <div class="card-footer">
                        <span><i class=""></i><a href="mailto:#">cm@flamingomedia.dk</a></span>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin: 0 auto;">
                  <div class="card">
                      <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                      <div class="card-block">
                          <h4 class="card-title">Ruben Thuesen</h4>
                          <div class="meta">
                              <p>Programmør</p>
                          </div>
                          <div class="card-text">
                              Tawshif is a web designer living in Bangladesh.
                          </div>
                      </div>
                      <div class="card-footer">
                        <span><i class=""></i><a href="mailto:#">rt@flamingomedia.dk</a></span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mt-4" style="margin: 0 auto;">
                  <div class="card">
                      <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                      <div class="card-block">
                          <h4 class="card-title">Anders Jakobsen</h4>
                          <div class="meta">
                              <p>Webdesign - Foto/Video</p>
                          </div>
                          <div class="card-text">
                              Tawshif is a web designer living in Bangladesh.
                          </div>
                      </div>
                      <div class="card-footer">
                          <span><i class=""></i><a href="mailto:#">aj@flamingomedia.dk</a></span>
                      </div>
                  </div>
              </div>
          </div>
  </div>
</section>

@include('include.footer')

@endsection
