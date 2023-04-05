<nav id="sidebar-admin-wraper">
    <div class="page-logo logo__container">
        <a href="/"><img class="header__logo" src="{{ asset('images/logo/logo.png') }}" alt=""></a>
        <span class="logo__text fs-3">Obillia</span>
    </div>

    <div style="padding-bottom: 11rem;" class="admin-nav scrollbar-macosx">
        <ul>
            <x-dashboard.menu :menu="$menu_provider[auth()->user()->role]" />
        </ul>
        {{-- @if (auth()->user()->isProvider())
            @if (auth()->user()->subscription_status == 'free')
                <div style="position: sticky; bottom: 0;" class="me-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Upgrade to Premium</h5>
                        <p class="card-text">Get access to all features and more.</p>
                        <a href="{{ route('plans') }}" class="btn btn-primary">Upgrade</a>
                    </div>
                </div>
            @endif
        @endif --}}
    </div>
</nav>
