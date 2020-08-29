<div class="d-flex">
    @foreach (Config::get('menu.setting') as $setting)
        <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2 setting-link {{ (Config::get('app.url').'/'.Request::path()) == route($setting['route_name']) ? 'text-main' : 'text-muted'}}" style="flex: 1;" data-url="{{ $setting['route_name'] }}">
            <div class="card-header small h-100 py-1 text-center text-uppercase">
                <div class="mt-3 mb-2">
                    <i class="{{ $setting['icon'] }} fa-3x"></i>
                </div>
                <div class="mb-3">{{ __($setting['title']) }}</div>
                <div class="mb-2 small">{{ __($setting['sub_title']) }}</div>
            </div>
        </div>
    @endforeach
</div>