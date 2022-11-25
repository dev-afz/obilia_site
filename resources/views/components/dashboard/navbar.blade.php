<nav id="sidebar-admin-wraper">
    <div class="page-logo">
        <a href="/"><img src="/images/logo-dark.png" alt=""></a>
    </div>

    <div class="admin-nav scrollbar-macosx">
        <ul>
            <x-dashboard.menu :menu="$menu_provider[auth()->user()->role]" />
        </ul>

    </div>
</nav>
