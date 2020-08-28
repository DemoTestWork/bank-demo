<style>
    .dropdown-submenu {
        position: relative;
    }

    /* .dropdown-submenu> a:after {
        content: ">";
        float: right;
    } */

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: 0px;
        margin-left: 0px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }
</style>

@foreach (Config::get('menu.particular') as $menu)
    @if( $menu['route_name'] )
        <li class="nav-item {{ (Config::get('app.url').'/'.Request::path()) == route($menu['route_name']) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route($menu['route_name']) }}">
                {{ __($menu['name']) }}
            </a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a role="button" data-toggle="dropdown" class="nav-link dropdown-toggle"
                href="{{ $menu['route_name'] ? route($menu['route_name']) : '#' }}">
                {{ __($menu['name']) }}
            </a>
            @if( count($menu['children']) > 0 )
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                @foreach ($menu['children'] as $item)
                    <li class="dropdown-submenu {{ (($item['route_name']) && (Config::get('app.url').'/'.Request::path()) == route($item['route_name'])) ? 'active' : ''}}">
                        <a class="dropdown-item" href="{{ $item['route_name'] ? route($item['route_name']) : '#' }}">{{ __($item['name']) }}</a>
                        @if( count($item['children']) > 0 )
                            <ul class="dropdown-menu">
                                @foreach ($item['children'] as $sub_item)
                                    <li class="dropdown-submenu {{ (($sub_item['route_name']) && (Config::get('app.url').'/'.Request::path()) == route($sub_item['route_name'])) ? 'active' : ''}}"><a class="dropdown-item" tabindex="-1" href="{{ $sub_item['route_name'] ? route($sub_item['route_name']) : '#' }}">{{ __($sub_item['name']) }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                </ul>
            @endif
    @endif
@endforeach