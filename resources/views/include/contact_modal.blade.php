<div id="myModal" class="modal" role="dialog"
     aria-labelledby="contact form" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:20px;">
                    <h2>Indhent dit gratis tilbud i dag.</h2>

                    <div class="well well-sm">
                        @include('include.contact_form')
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:20px;">
                    <p class="lead">Få et uforpligtende tilbud
                        <span class="text-success">indenfor 24 timer</span>
                    </p>
                    <ul class="list-unstyled" style="line-height: 2">
                        <li><span class="fa fa-check text-success"></span> Altid svar fra en ekspert </li>
                        <li><span class="fa fa-check text-success"></span> Et tilbud der er tilpasset netop din opgave</li>
                        <img class="img-responsive" src="{{asset('images/tilbud.png')}}" alt="Tilbud">
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <!-- TODO: delete? -->
        </div>
    </div>
</div>
