@foreach (Config::get('menu.particular') as $menu)
    @if( $menu['image'] )
        <li class="nav-item {{ (Config::get('app.url').'/'.Request::path()) == route($menu['route_name']) ? 'active' : ''}}">
            <a class="nav-link text-uppercase" href="{{ route($menu['route_name']) }}">
                <img class="img-fluid" src="{{ asset('images/'.$menu['image']) }}" alt="" style="width: 22px" />
            </a>
        </li>
    @elseif( $menu['route_name'] )
        <li class="nav-item {{ (Config::get('app.url').'/'.Request::path()) == route($menu['route_name']) ? 'active' : ''}}">
            <a class="nav-link text-uppercase" href="{{ route($menu['route_name']) }}">
                {{ __($menu['name']) }}
            </a>
        </li>
    @else
        <li class="nav-item dropdown dropdown-custom {{ (($menu['route_name']) && (Config::get('app.url').'/'.Request::path()) == route($menu['route_name'])) ? 'active' : ''}}">
            <a role="button" data-toggle="dropdown" class="nav-link dropdown-toggle text-uppercase"
                href="{{ $menu['route_name'] ? route($menu['route_name']) : '#' }}">
                {{ __($menu['name']) }}
            </a>
            @if( $menu['children'] )
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                @foreach ($menu['children'] as $item)
                    <li class="dropdown-submenu @if( count($item['children']) > 0) has-submenu @endif {{ (($item['route_name']) && (Config::get('app.url').'/'.Request::path()) == route($item['route_name'])) ? 'active' : ''}}">
                        <a class="dropdown-item text-uppercase" href="{{ $item['route_name'] ? route($item['route_name']) : '#' }}">
                            {{ __($item['name']) }}
                        </a>
                        @if( count($item['children']) > 0 )
                            <ul class="dropdown-menu">
                                @foreach ($item['children'] as $sub_item)
                                    <li class="dropdown-submenu {{ (($sub_item['route_name']) && (Config::get('app.url').'/'.Request::path()) == route($sub_item['route_name'])) ? 'active' : ''}}"><a class="dropdown-item text-uppercase" tabindex="-1" href="{{ $sub_item['route_name'] ? route($sub_item['route_name']) : '#' }}">{{ __($sub_item['name']) }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                </ul>
            @endif
    @endif
@endforeach