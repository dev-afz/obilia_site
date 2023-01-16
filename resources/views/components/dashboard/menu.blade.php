@forelse ($menu as $m)
    <li @class([
        'active' => Route::currentRouteName() === $m->slug,
    ])>
        <a class="d-flex align-items-center" href="{{ isset($m->url) ? url($m->url) : 'javascript:void(0)' }}">
            @if ($m->icon)
                <div class="svg-holder d-flex">
                    {!! $m->icon !!}
                </div>
            @else
                {{-- <i class="fa fa-dot-circle-o"></i> --}}
            @endif
            <p class="admin-nav-text mb-0 ms-3 fs-6">{{ $m->name }}</p>
        </a>

        @if (isset($m->submenu))
            <ul class="sub-menu">
                <x-dashboard.sub-menu :subMenu="$m->submenu" />
            </ul>
        @endif
    </li>
@empty
@endforelse
