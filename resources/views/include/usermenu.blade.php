@if(Auth()->user()->id)
         <?php $user_avatar = Auth()->user()->avatar ?>
@endif
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span> 
            @if(isset($user_avatar))
                <img src="/storage/{{ $user_avatar }}" />
            @else
                <span class="glyphicon glyphicon-chevron-down"></span>
            @endif
        </a>

        <ul class="dropdown-menu">
            <li class="menu-color">
                <div class="navbar-login">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="text-center">
                                <img class="avatar-size" src="/storage/{{ $user_avatar }}" />
                            </p>
                        </div>

                        <div class="col-lg-8">
                            <p class="text-left small"><strong>{{ auth()->user()->email }}</strong></p>
                            <p class="text-left">
                                <a href="/admin/users/{{ auth()->user()->id}}/edit" class="btn btn-primary btn-block btn-sm profil-btn">Profil</a>
                            </p>
                            <p class="text-left">
                                @if(auth()->user()->role_id === 1)
                                    Der er
                                        {{ count(\App\Message::getMessagesWithoutResponse(auth()->user()->id)) + count(\App\MessageResponse::getLatestResponse(auth()->user()->id)) }}
                                    ubesvarede
                                @endif
                                <a href="{{ URL::to('/messages') }}">Beskeder</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="divider"></li>

            <li>
                <div class="navbar-login navbar-login-session">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="logout-btn">
                                <a href="/logout" class="btn btn-danger btn-block">Log ud</a>
                            </pclass>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </li>
</ul>
