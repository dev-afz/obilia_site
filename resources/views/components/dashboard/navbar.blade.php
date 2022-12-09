<nav id="sidebar-admin-wraper">
    <div class="page-logo logo__container">
        <a href="/"><img class="header__logo" src="{{ asset('images/logo/logo.png') }}" alt=""></a>
        <span class="logo__text fs-3">ObilLia</span>
    </div>

    <div class="admin-nav scrollbar-macosx">
        <ul>
            <x-dashboard.menu :menu="$menu_provider[auth()->user()->role]" />
        </ul>

    </div>
</nav>
