
@foreach (Config::get('menu.guest') as $menu)
    <li class="nav-item {{ (Config::get('app.url').'/'.Request::path()) == route($menu['route_name']) ? 'active' : ''}}">
        <a class="nav-link" href="{{ route($menu['route_name']) }}">
            {{ __($menu['name']) }} 
            {!! (Config::get('app.url').'/'.Request::path()) == route($menu['route_name']) ? '<span class="sr-only">(current)</span>' : '' !!}
        </a>
    </li>
@endforeach