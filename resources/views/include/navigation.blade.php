<header id="top-header" nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top" >
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src={{asset('images/FlamingoLogoDONEDONE.png')}} alt=""></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" role="navigation">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produkter
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Priser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontakt</a>

        </li>
      </ul>
      <button class="btn btn-danger navbar-btn">FÅ ET TILBUD</button>

        <div class="pull-xs-right">
            @if(isset(Auth::user()->name))
                @include('include/usermenu')
            @else
                <a href="/admin/login">Login</a>
            @endif
        </div>
    </div>
  </div>
</header>
