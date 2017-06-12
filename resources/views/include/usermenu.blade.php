@if(Auth()->user()->id)
         <?php $user_avatar = Auth()->user()->avatar ?>
@endif
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown profile">
        <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{ asset("storage/{$user_avatar}") }}" class="profile-img">
            <span class="caret"></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-animated">
            <li>
                <div>
                    <h5>{{ Auth::user()->name }}</h5>
                    <h6>{{ Auth::user()->email }}</h6>
                </div>
            </li>
            <li class="divider"></li>

            <?php $nav_items = config('voyager.dashboard.navbar_items'); ?>
            @if(is_array($nav_items) && !empty($nav_items))
                @foreach($nav_items as $name => $item)
                    <li {!! isset($item['classes']) && !empty($item['classes']) ? 'class="'.$item['classes'].'"' : '' !!}>
                        @if(isset($item['route']) && $item['route'] == 'voyager.logout')
                            <form action="{{ route('voyager.logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-block text-center">
                                    @if(isset($item['icon_class']) && !empty($item['icon_class']))
                                        <i class="{!! $item['icon_class'] !!}"></i>
                                    @endif
                                    {{$name}}
                                </button>
                            </form>
                        @else
                            <a href="{{ isset($item['route']) && Route::has($item['route']) ? route($item['route']) : (isset($item['route']) ? $item['route'] : '#') }}" {!! isset($item['target_blank']) && $item['target_blank'] ? 'target="_blank"' : '' !!}>
                                @if(isset($item['icon_class']) && !empty($item['icon_class']))
                                    <i class="{!! $item['icon_class'] !!}"></i>
                                @endif
                                {{$name}}
                            </a>
                        @endif
                    </li>
                @endforeach
            @endif
        </ul>
    </li>
</ul>
