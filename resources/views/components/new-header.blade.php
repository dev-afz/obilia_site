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
                        <li class=""><a href="/#about">About</a></li>
                        <li class=""><a href="/#choose-your-plan">Plan</a></li>
                        <li class=""><a href="/#how-it-works">How it works</a></li>
                        <li class=""><a href="{{ route('contact') }}">Contact us</a></li>
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

                                                        @auth
                                                            @if (auth()->user()->isProvider())
                                                                <a
                                                                    href="{{ route('search') }}?type=work&category={{ $c->slug }}">{{ $c->name }}</a>
                                                            @else
                                                                <a
                                                                    href="{{ route('search') }}?type=talent&category={{ $c->slug }}">{{ $c->name }}</a>
                                                            @endif
                                                        @endauth

                                                        @guest
                                                            <a
                                                                href="{{ route('search') }}?type=work&category={{ $c->slug }}">{{ $c->name }}</a>
                                                        @endguest

                                                        @if ($c->sub_categories)
                                                            <ul class="sub-menu">
                                                                @forelse ($c->sub_categories as $s)
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('search') }}?type=work&sub_category={{ $s->slug }}">{{ $s->name }}
                                                                        </a>
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




            </div>


        </div>



    </div>








</header>
<!-- HEADER END -->
