@forelse ($menu as $m)
    <li @class([
        'active' => Route::currentRouteName() === $m->slug,
    ])>
        <a href="{{ isset($m->url) ? url($m->url) : 'javascript:void(0)' }}">
            @if ($m->icon)
                <span class="svg-holder">
                    {!! $m->icon !!}
                </span>
            @else
                {{-- <i class="fa fa-dot-circle-o"></i> --}}
            @endif
            <span class="admin-nav-text">{{ $m->name }}</span>
        </a>

        @if (isset($m->submenu))
            <ul class="sub-menu">
                <x-dashboard.sub-menu :subMenu="$m->submenu" />
            </ul>
        @endif
    </li>
@empty
@endforelse
