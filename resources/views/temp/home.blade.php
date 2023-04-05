<x-layout :newHeader="true">

    <x-slot name="title"> Home </x-slot>
    <x-slot name="styles">
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>

        </style>

    </x-slot>


    <div class="twm-home4-banner-section position-relative ">
        <div class="row splide">
            <!--Left Section-->
            <div class="splide__track">

                <div class="splide__list">


                    <div data-splide-hash="01" class="col-xl-12 col-lg-12 splide__slide col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="twm-bnr-left-section px-2">
                                    <div class="twm-bnr-title-large text-primary">
                                        <h2 class="text-primary mb-1">
                                            Make <br>
                                            ideas <br>
                                            happen
                                        </h2>
                                    </div>
                                    <div class="twm-bnr-discription mb-2">Join the most comprehensive service
                                        marketplace</div>

                                    <h4 class="text-primary fs-4">
                                        Pre Register today and enjoy benefits
                                    </h4>
                                    <p class="mb-1">
                                        No service charge for clients for 6 months
                                    </p>
                                    <p class="mb-2">
                                        Get extra features free of cost for sellers for 3 months
                                    </p>
                                    <div class="btn-container mt-4">
                                        <button data-bs-toggle="modal" data-wish-for="seller" data-bs-target="#waitlist"
                                            class="call-to-action-btn ">For sellers</button>
                                        <button data-bs-toggle="modal" data-wish-for="client" data-bs-target="#waitlist"
                                            class="call-to-action-btn">For clients</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="">
                                    <div class="twm-bnr-img">
                                        <img src="{{ asset('images/svg/hero.svg') }}" alt="hero" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div data-splide-hash="02" class="col-xl-12 col-lg-12  splide__slide col-md-12">
                        <div style="max-width: 100% !important;" class="twm-bnr-left-section px-2">
                            <div class="twm-bnr-title-large text-primary">
                                <h2 class="text-primary mb-1">
                                    Discover<br>
                                    the <br>
                                    best
                                </h2>
                            </div>
                            <div class="twm-bnr-discription  mb-2">It's easy, safe, and flexible.</div>

                            <h4 class="text-primary fs-4">
                                Join the waitlist today and enjoy benefits
                            </h4>
                            <p class="mb-1">
                                No service charge for client for first 5 projects
                            </p>
                            <p class="mb-2">
                                Get Obillia Extra free of cost for service sellers for 3 months


                            </p>
                            <div class="btn-container mt-4">
                                <button data-bs-toggle="modal" data-bs-target="#waitlist"
                                    class="call-to-action-btn ">Waitlist for sellers</button>
                                <button data-bs-toggle="modal" data-bs-target="#waitlist"
                                    class="call-to-action-btn">Waitlist for clients</button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>


        </div>

    </div>
    <div style="margin-bottom: 10rem" class="row">
        <div class="col-12 position-relative">
            <span class="scroll-btn">
                <a href="#about">
                    <span class="mouse">
                        <span>
                        </span>
                    </span>
                </a>
                <p>scroll down</p>

            </span>
        </div>
    </div>
    <div id="about" class="container my-5 hide-nav-on-view">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-orange">
                    Hiring on-demand talent made easy
                </h2>
                <p class="text-primary fs-5">
                    Obillia is redefining the way freelance outsourcing is executed in India. With the rise of
                    freelancers and the gig economy in India, hiring freelancers for contract work is smooth with our
                    easy-to-use talent marketplace. Find your best online services partner from a pan India talent pool,
                    be it web development services, graphic design services in India or photographers for your special
                    occasion, we have it covered.
                </p>
            </div>
            <div class="col-md-6 col-sm-none text-center">

                <img src="{{ asset('images/svg/hiring.svg') }}" alt="hero" class="img-fluid">

            </div>
        </div>
    </div>
    <x-section.category :categories="$industries" />
    <div id="how-it-works" class="container mt-5  features-section">
        <div class="row py-4">
            <div class="col-12 my-3">
                <div class="switch-container">
                    <h2 class="m-0 text-white feature-key">
                        for sellers
                    </h2>
                    <div class="feature-switch d-flex align-items-center">
                        <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                    </div>
                    <h2 class="m-0 text-white feature-key">
                        for clients
                    </h2>
                </div>
            </div>

            <div id="for-sellers" class="col-12">
                <div class="row mx-5 mt-5 ob-feature-parent match-height">
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" data-aos="fade-up"
                        data-aos-duration="500" class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-shield-check" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M11.46 20.846a12 12 0 0 1 -7.96 -14.846a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 -.09 7.06">
                                        </path>
                                        <path d="M15 19l2 2l4 -4"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Secure and timely payouts
                                    </h4>
                                    <p>
                                        Clients pay upfront, so you can be sure of payments against deliverables. We
                                        ensure your
                                        payouts are on time through our automated systems that run on the best payment
                                        software
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" data-aos-delay="200"
                        class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-coin-rupee" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M15 8h-6h1a3 3 0 0 1 0 6h-1l3 3"></path>
                                        <path d="M9 11h6"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Send custom quotes everytime
                                    </h4>
                                    <p class="">
                                        Each client and project is different, so why should prices be fixed? Send custom
                                        contracts
                                        with milestones for unique projects & clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-map-pin" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        All in one workspace
                                    </h4>
                                    <p class="">
                                        Keep in touch with your client always through project-based workspaces with
                                        milestone
                                        tracking, chat, file sharing and many more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3"
                        data-aos-delay="200">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-invoice" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path
                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                        </path>
                                        <path d="M9 7l1 0"></path>
                                        <path d="M9 13l6 0"></path>
                                        <path d="M13 17l2 0"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Automated Invoicing
                                    </h4>
                                    <p class="">
                                        We want our partners to do what they love the most, forget the rest, we fulfil
                                        everything
                                        else. Get copies of your invoices for Tax Purposes automatically from your
                                        dashboard.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-affiliate" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5.931 6.936l1.275 4.249m5.607 5.609l4.251 1.275"></path>
                                        <path d="M11.683 12.317l5.759 -5.759"></path>
                                        <path d="M5.5 5.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                        <path d="M18.5 5.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                        <path d="M18.5 18.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                        <path d="M8.5 15.5m-4.5 0a4.5 4.5 0 1 0 9 0a4.5 4.5 0 1 0 -9 0"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Collaborate with other sellers
                                    </h4>
                                    <p class="">
                                        Want to create projects with other sellers, feel free to connect and get the
                                        same features
                                        as collaborating with clients.
                                        Please note, currently Obillia only supports one-one collabs, group collabs will
                                        be coming
                                        soon.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3"
                        data-aos-delay="200">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-world-share" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20.94 13.045a9 9 0 1 0 -8.953 7.955"></path>
                                        <path d="M3.6 9h16.8"></path>
                                        <path d="M3.6 15h9.4"></path>
                                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                        <path d="M12.5 3a16.991 16.991 0 0 1 2.529 10.294"></path>
                                        <path d="M16 22l5 -5"></path>
                                        <path d="M21 21.5v-4.5h-4.5"></path>
                                    </svg>

                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Bring your own client
                                    </h4>
                                    <p class="">
                                        Working with clients externally? Bring them to obillia at zero cost or flat
                                        rates based on
                                        your plan. We send them GST-compliant invoices, you can track all your projects
                                        in one
                                        place. Easy for you, easy for your client.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-12 my-3">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="ob-feature_item">
                                    <div class="ob-feature-item_link">
                                        <div class="ob-feature-item_bg"></div>
                                        <div class="icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-zoom-money" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                                <path d="M21 21l-6 -6"></path>
                                                <path d="M12 7h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                                <path d="M10 13v1m0 -8v1"></path>
                                            </svg>
                                        </div>
                                        <div class="inner-text">
                                            <h4 class="">
                                                Do more, earn more with our curated plans
                                            </h4>
                                            <p class="">
                                                It's always free* to join obillia as a freelancer. we deduct a platform
                                                fee for
                                                using our
                                                resources on the free or extra plan, however, with Obillia Plus you can
                                                do more
                                                and cancel
                                                the platform fees from each project. Read more about our plans here .
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <small>
                            To know more about how Obillia works for Sellers <a
                                class="text-warning text-decoration-underline" href="#">read here</a>.
                        </small>
                    </div>
                </div>
            </div>
            <div id="for-clients" class="col-12 d-none">
                <div class="row mx-5 mt-5 ob-feature-parent match-height">

                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-businessplan" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0"></path>
                                        <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                        <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                        <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                        <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                        <path d="M5 15v1m0 -8v1"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Services for your budget.
                                    </h4>
                                    <p class="">
                                        A startup or a large media house? Doesn't matter, find quality service
                                        providers for your
                                        budget.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" data-aos-delay="200"
                        class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-discount-check" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1">
                                        </path>
                                        <path d="M9 12l2 2l4 -4"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Verified sellers
                                    </h4>
                                    <p class="">
                                        We ensure that all sellers are verified for the safety and security of our
                                        clients.
                                        Non-background verified profiles and services are never live on Obillia.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-shield-check-filled" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M11.998 2l.118 .007l.059 .008l.061 .013l.111 .034a.993 .993 0 0 1 .217 .112l.104 .082l.255 .218a11 11 0 0 0 7.189 2.537l.342 -.01a1 1 0 0 1 1.005 .717a13 13 0 0 1 -9.208 16.25a1 1 0 0 1 -.502 0a13 13 0 0 1 -9.209 -16.25a1 1 0 0 1 1.005 -.717a11 11 0 0 0 7.531 -2.527l.263 -.225l.096 -.075a.993 .993 0 0 1 .217 -.112l.112 -.034a.97 .97 0 0 1 .119 -.021l.115 -.007zm3.71 7.293a1 1 0 0 0 -1.415 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                            stroke-width="0" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Protected payments
                                    </h4>
                                    <p class="">
                                        Remember you pay upfront for projects/milestones, but payments aren't
                                        released until you
                                        approve the deliveried work.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" data-aos-delay="200"
                        class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-map-pin" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        All in one workspace
                                    </h4>
                                    <p class="">
                                        Keep in touch with your freelancer always through project-based workspaces
                                        with milestone
                                        tracking, chat, file sharing and many more.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-invoice" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path
                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                        </path>
                                        <path d="M9 7l1 0"></path>
                                        <path d="M9 13l6 0"></path>
                                        <path d="M13 17l2 0"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        GST compliant invoices
                                    </h4>
                                    <p class="">
                                        Are you a business owner finding it challenging to get Freelance services
                                        with GST invoices?
                                        Worry no more, all invoices to clients in Obillia are GST compliant, fill up
                                        your GSTIN and
                                        you are good to go. You don't have to worry if your freelancer is registered
                                        or not.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" data-aos-delay="200"
                        class="col-md-6 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user-search" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h1.5"></path>
                                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M20.2 20.2l1.8 1.8"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Post a job or hire directly.
                                    </h4>
                                    <p class="">
                                        Experience multiple approaches to hiring your project partner in Obillia
                                        either via posting
                                        a job or reaching out to a freelance service provider directly.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-12 my-3">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="ob-feature_item">
                                    <div class="ob-feature-item_link">
                                        <div class="ob-feature-item_bg"></div>
                                        <div class="icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-user-pin" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5"></path>
                                                <path
                                                    d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z">
                                                </path>
                                                <path d="M19 18v.01"></path>
                                            </svg>
                                        </div>
                                        <div class="inner-text">
                                            <h4 class="">
                                                Get matched suggestions.
                                            </h4>
                                            <p class="">
                                                Get service providers that match your requirements under your job
                                                posting.
                                                Invite them to
                                                apply or message them directly, as a client you always have full access
                                                to
                                                every service
                                                provider here.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <small>
                            To know more about how Obillia works for clients <a
                                class="text-dark text-decoration-underline" href="#">read here</a>.
                            <br>

                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- <div class="container my-5  ">
        <div class="row">
            <div class="col-md-12 position-relative mb-5 pe-5">
                <h1 class="text-primary">
                    Discover Work
                </h1>
                <a href="#" class="btn btn-primary position-absolute end-0 bottom-0">View
                    all</a>
            </div>

            <div class="col-12">
                <div class="section-content">
                    <div class="owl-carousel job-corousel owl-btn-bottom-center ">
                        @forelse ($jobs as $job)
                            <div class="item row match-height">
                                <x-elements.job-card class="col-12" :job="$job" :showBtn="false" />
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    <x-elements.modal id="waitlist" class="twm-sign-up" :footer="false" title="Waitlist request for seller">

        <form id="add-waitlist">
            <div class="row">
                <div class="col-md-12">
                    <x-utils.input name="name" />
                    <input type="hidden" name="for" id="wish-for">
                </div>
                <div class="col-md-12">
                    <x-utils.input name="email" type="email" />
                </div>
                <div class="col-md-12">
                    <x-utils.input name="phone" :required="false" :attrs="[
                        'pattern' => '[0-9]{10}',
                    ]" />
                </div>

                <div id="exp-parent" class="col-md-12">
                    <x-utils.select :maxSelect="3" :multiple="true" name="expertise" :options="[
                        'Design',
                        'Writing',
                        'Music',
                        'Audio',
                        'Video',
                        'Photography',
                        'Web & App Development',
                        'Marketing',
                    ]" />
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-block w-100 btn-lg">Submit</button>
                </div>

            </div>
        </form>


    </x-elements.modal>



    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-url-hash@0.3.0/dist/js/splide-extension-url-hash.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



        <script>
            AOS.init();
            $('.category-corousel').owlCarousel({
                loop: true,
                nav: true,
                dots: false,
                margin: 40,
                autoplay: false,

                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    991: {
                        items: 3,
                    }

                }
            });
            $('.job-corousel').owlCarousel({
                loop: true,
                nav: true,
                dots: false,
                margin: 40,
                autoplay: false,

                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 1,
                    },
                    991: {
                        items: 3,
                    }

                }
            });

            $('#switch').change(function(e) {
                setTimeout(() => {
                    AOS.init();
                }, 100);
                e.preventDefault();
                if ($(this).is(':checked')) {
                    $('#for-clients').removeClass('d-none');
                    $('#for-sellers').addClass('d-none');
                    $('.features-section').css('--features-bg', '#FFF')
                        .css('--features-color', '#09596f')
                } else {
                    $('#for-clients').addClass('d-none');
                    $('#for-sellers').removeClass('d-none');
                    $('.features-section').css('--features-bg', '#000')
                        .css('--features-color', '#FFF')
                }
            });

            $('#add-waitlist').submit(function(e) {
                e.preventDefault();
                window.rebound({
                    form: $(this),
                    url: "{{ route('wishlist') }}",
                    successCallback: function(data) {
                        $('#waitlist').modal('hide');
                    }
                })
            });
            $('[data-wish-for]').click(function(e) {
                e.preventDefault();
                const wishFor = $(this).data('wish-for');
                $('#wish-for').val(wishFor);

                if (wishFor === 'seller') {
                    $('#exp-parent').removeClass('d-none');
                    $('#exp-parent').find('select').attr('required', true);
                } else {
                    $('#exp-parent').addClass('d-none');
                    $('#exp-parent').find('select').attr('required', false);
                }

                $('#waitlist').find('.modal-title').text(`Waitlist request for ${wishFor}`);

            });

            if ($(window).width() > 768) {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > $('.hide-nav-on-view').offset().top - 250) {
                        $('.main-bar').css('top', '-5rem');
                    } else {
                        $('.main-bar').css('top', '0');
                    }
                });
            }
            var splide = new Splide('.splide', {
                arrows: false,
                pagination: true
            });

            splide.mount(window.splide.Extensions);
        </script>

    </x-slot>


</x-layout>
