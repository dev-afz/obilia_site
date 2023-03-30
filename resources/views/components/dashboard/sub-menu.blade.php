@forelse ($subMenu as $m)
    <li class="{{ Route::currentRouteName() === $m->slug ? 'active' : '' }} ">
        <a href="{{ isset($m->url) ? url($m->url) : 'javascript:void(0)' }}">
            @if ($m->icon)
                <span class="svg-holder">
                    {!! $m->icon !!}
                </span>
            @else
                <svg style="height: 15px;width: 15px;" aria-hidden="true" focusable="false" data-prefix="fa-regular"
                    data-icon="circle" class="svg-inline--fa fa-circle fa-w-16" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"
                        fill="currentColor" />
                </svg>
            @endif
            <span class="admin-nav-text ms-2">{{ Str::ucfirst($m->name) }}</span>
        </a>

        @if (isset($m->submenu))
            <ul class="sub-menu">
                <x-dashboard.sub-menu :subMenu="$m->submenu" />


            </ul>
        @endif
    </li>
@empty
@endforelse
