<header class="site-header header-style-3 no-fixed mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg ">
        <div class="main-bar">

            <div class="container-fluid clearfix mw-1400">

                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a class="logo__container" href="{{ route('index') }}">
                            <img class="header__logo" height="55" src="{{ asset('images/logo/logo.png') }}"
                                alt="">
                            <span class="logo__text">Obillia</span>
                        </a>
                    </div>
                </div>

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex flex-column align-items-center">
                    <div class="p-3 d-md-none d-flex align-items-center gap-2 w-100">
                        <img class="d-md-none  header__logo" src="{{ asset('images/logo/logo.png') }}" alt="">
                        <h4 class="d-md-none logo__text m-0">Obillia</h4>
                    </div>
                    <ul class=" nav navbar-nav flex-row">
                        <li class=""><a href="{{ route('index') }}">Home</a></li>
                        <li class=""><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li class=""><a href="{{ route('about-us') }}">About Us</a></li>
                    </ul>

                    <ul class="mobile-sub-menu nav navbar-nav flex-row">
                        <li>
                            <a href="javascript:void(0)">Browse Categories</a>
                            <ul class="sub-menu">
                                @forelse ($menu_provider['megaMenu'] as $m)
                                    <li>
                                        <a href="{{ route('categories', $m->slug) }}">{{ $m->name }}</a>
                                        @if ($m->categories)
                                            <ul class="sub-menu">
                                                @forelse ($m->categories as $c)
                                                    <li>
                                                        <a href="#">{{ $c->name }}</a>

                                                        @if ($c->sub_categories)
                                                            <ul class="sub-menu">
                                                                @forelse ($c->sub_categories as $s)
                                                                    <li>
                                                                        <a href="#">{{ $s->name }}</a>
                                                                    </li>
                                                                @empty
                                                                @endforelse
                                                            </ul>
                                                        @endif

                                                    </li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        @endif
                                    </li>

                                @empty
                                @endforelse
                            </ul>
                        </li>
                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        <div class="header-search">
                            <a href="#search" class="header-search-icon  d-none"><i class="feather-search"></i></a>
                            <div class="header-search-form">
                                <form action="{{ route('search') }}" method="GET">
                                    <div class="search-container">
                                        <select required name="type" class="wt-search-bar-select selectpicker me-2"
                                            data-live-search="false" id="work__type">
                                            <option selected value="talent">Talent</option>
                                            <option value="work">Work</option>
                                        </select>
                                        <div class="search-input-container">
                                            <input type="text" placeholder="search" name="q" id="q">

                                            <button type="submit" class="search-btn"><i
                                                    class="feather-search"></i></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="extra-cell">
                        <div class="header-nav-btn-section">
                            @guest()
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                        <i class="feather-user-plus"></i> Sign Up
                                    </a>
                                </div>
                                <div class="twm-nav-btn-right">
                                    <a href="#login_popup" data-bs-toggle="modal" class="twm-nav-post-a-job">
                                        <i class="feather-log-in"></i> Login
                                    </a>
                                </div>
                            @endguest

                            @auth
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" href="/{{ Str::replace('_', '-', auth()->user()->role) }}"
                                        role="button">
                                        <i class="feather-user"></i> Dashboard
                                    </a>
                                </div>

                            @endauth
                        </div>
                    </div>

                </div>



            </div>
            <div class="mega__menu__container mx-auto ">
                <div class="menu-container w-100 mw-1400">
                    <div class="mz-menu">
                        <ul>
                            @forelse ($menu_provider['megaMenu'] as $m)
                                <li>
                                    <a href="{{ route('categories', $m->slug) }}">{{ $m->name }}</a>
                                    @if ($m->categories)
                                        <ul>
                                            @forelse ($m->categories as $c)
                                                <li>
                                                    <a href="#">{{ $c->name }}</a>

                                                    @if ($c->sub_categories)
                                                        <ul>
                                                            @forelse ($c->sub_categories as $s)
                                                                <li>
                                                                    <a class="sub-link"
                                                                        href="#">{{ $s->name }}</a>
                                                                </li>
                                                            @empty
                                                            @endforelse
                                                        </ul>
                                                    @endif

                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    @endif
                                </li>

                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

        </div>



    </div>








</header>
<!-- HEADER END -->
