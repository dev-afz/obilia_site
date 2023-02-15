<div class="twm-home4-banner-section site-bg-light-purple">
    <div class="row">
        <!--Left Section-->
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="twm-bnr-left-section">
                <div class="twm-bnr-title-large">Your <span class="site-text-primary">Dream Job </span> in one
                    place
                </div>
                <div class="twm-bnr-discription">Find jobs that match your interests with us.</div>
                <div class="twm-bnr-search-bar">
                    <form action="{{ route('search') }}">
                        <div class="row">
                            <!--Title-->
                            <div class="form-group col-xl-8 col-lg-8 col-md-8">
                                <label>What</label>
                                <div class="twm-single-iput">
                                    <input type="hidden" class="d-none" name="type" value="work">
                                    <input autocomplete="off" name="q" type="text"
                                        class="form-control  bg-none" placeholder="Job title, Keywords, or company">
                                </div>
                            </div>

                            <!--Find job btn-->
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <button type="button" class="site-button">Find Job</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="twm-bnr-popular-search">
                    <span class="twm-title">Popular Searches:</span>
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Developer"

                        @else
                        href="{{ route('search') }}?type=talent&q=Developer"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Developer"
                        @endguest>Developer</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Designer"

                        @else
                        href="{{ route('search') }}?type=talent&q=Designer"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Designer"
                        @endguest>Designer</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Architect"

                        @else
                        href="{{ route('search') }}?type=talent&q=Architect"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Architect"
                        @endguest>Architect</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Engineer"

                        @else
                        href="{{ route('search') }}?type=talent&q=Engineer"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Engineer"
                        @endguest>Engineer</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=PHP"

                        @else
                        href="{{ route('search') }}?type=talent&q=PHP"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=PHP"
                        @endguest>PHP</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Banking"

                        @else
                        href="{{ route('search') }}?type=talent&q=Banking"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Banking"
                        @endguest>Banking</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Ios"

                        @else
                        href="{{ route('search') }}?type=talent&q=Ios"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Ios"
                        @endguest>Ios</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Freelance"

                        @else
                        href="{{ route('search') }}?type=talent&q=Freelance"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Freelance"
                        @endguest>Freelance</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Writing"

                        @else
                        href="{{ route('search') }}?type=talent&q=Writing"
                        @endif @endauth
                        @guest()
                            href="{{ route('search') }}?type=work&q=Writing"
                        @endguest>Writing</a>
                    ,
                    <a @auth
@if (auth()->user()->isProvider())
                        href="{{ route('search') }}?type=work&q=Accountancy"

                        @else
                        href="{{ route('search') }}?type=talent&q=Accountancy"

                        @endif @endauth
                        @guest()
                        href="{{ route('search') }}?type=work&q=Accountancy"
                    @endguest>Accountancy
                    </a>...
                </div>
            </div>
        </div>

        <!--right Section-->
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="twm-bnr-right-section anm" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">

                <div class="twm-graphics-h3 twm-bg-line">
                    <img src="images/home-4/banner/bg-line.png" alt="">
                </div>

                <div class="twm-graphics-user twm-user">
                    <img src="images/home-4/banner/user.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-bg-plate">
                    <img src="images/home-4/banner/bg-plate.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-checked-plate">
                    <img src="images/home-4/banner/checked-plate.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-blue-block">
                    <img src="images/home-4/banner/blue-block.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-color-dotts">
                    <img src="images/home-4/banner/color-dotts.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-card-large anm" data-speed-y="-2" data-speed-scale="-15"
                    data-speed-opacity="50">
                    <img src="images/home-4/banner/card.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-card-s1 anm" data-speed-y="2" data-speed-scale="15"
                    data-speed-opacity="50">
                    <img src="images/home-4/banner/card-s1.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-card-s2 anm" data-speed-x="-4" data-speed-scale="-25"
                    data-speed-opacity="50">
                    <img src="images/home-4/banner/card-s2.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-white-dotts">
                    <img src="images/home-4/banner/white-dotts.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-top-shadow anm" data-speed-x="-16" data-speed-y="2"
                    data-speed-scale="50" data-speed-rotate="25">
                    <img src="images/home-4/banner/top-shadow.png" alt="">
                </div>

                <div class="twm-graphics-h3 twm-bottom-shadow anm" data-speed-x="16" data-speed-y="2"
                    data-speed-scale="20" data-speed-rotate="25">
                    <img src="images/home-4/banner/bottom-shadow.png" alt="">
                </div>


            </div>
        </div>
    </div>

</div>
