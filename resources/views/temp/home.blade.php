<x-layout :newHeader="true">

    <x-slot name="title"> Home </x-slot>
    <x-slot name="styles">
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>
            .splide__pagination__page.is-active {
                background: #09596f;
                transform: scale(1.4);
                opacity: 1;
                z-index: 1;
            }

            .splide__pagination__page {
                width: 1rem;
                height: 1rem;
            }

            .ob-feature_item {
                overflow: hidden;
                border-radius: 28px;
            }


            .ob-feature-item_link {
                display: block;
                padding: 30px 20px;
                background-color: #121212;
                overflow: hidden;
                position: relative;
                height: 100%;
                display: flex;
                align-items: center;
                gap: 1rem;
                border: 2px solid #e2e8f02e;
                border-radius: 28px;

            }

            #for-clients .ob-feature-item_link {
                background-color: #FFF;
                border: 2px solid #09596f;
                border-radius: 28px;
            }

            #for-clients .icon-holder {
                background-color: rgb(154 164 183 / 25%);
            }


            .ob-feature-item_link:hover .ob-feature-item_bg {
                -webkit-transform: scale(25);
                -ms-transform: scale(25);
                transform: scale(25);
            }

            .ob-feature_item .inner-text {
                position: relative;
                z-index: 2;
            }




            .ob-feature-item_bg {
                height: 128px;
                width: 128px;
                background-color: #002fff;

                z-index: 1;
                position: absolute;
                top: -75px;
                right: -75px;

                border-radius: 50%;

                -webkit-transition: all 1s ease;
                -o-transition: all 1s ease;
                transition: all 1s ease;
            }

            .ob-feature-parent>div:nth-child(2) .ob-feature-item_bg {
                background-color: #3ecd5e !important;
            }

            .ob-feature-parent>div:nth-child(3) .ob-feature-item_bg {
                background-color: #e44002;
            }

            .ob-feature-parent>div:nth-child(4) .ob-feature-item_bg {
                background-color: #952aff;
            }

            .ob-feature-parent>div:nth-child(5) .ob-feature-item_bg {
                background-color: #cd3e94;
            }

            .ob-feature-parent>div:nth-child(6) .ob-feature-item_bg {
                background-color: #4c49ea;
            }

            .ob-feature-parent>div:nth-child(7) .ob-feature-item_bg {
                background-color: #393053;
            }



            #for-clients .ob-feature-parent>div:nth-child(1) .ob-feature-item_bg {
                background-color: #BBD6B8 !important;
            }

            #for-clients .ob-feature-parent>div:nth-child(2) .ob-feature-item_bg {
                background-color: #FFF1DC !important;
            }

            #for-clients .ob-feature-parent>div:nth-child(3) .ob-feature-item_bg {
                background-color: #FFACAC;
            }

            #for-clients .ob-feature-parent>div:nth-child(4) .ob-feature-item_bg {
                background-color: #ECF2FF;
            }

            #for-clients .ob-feature-parent>div:nth-child(5) .ob-feature-item_bg {
                background-color: #F5EAEA;
            }

            #for-clients .ob-feature-parent>div:nth-child(6) .ob-feature-item_bg {
                background-color: #F8EAD8;
            }

            #for-clients .ob-feature-parent>div:nth-child(7) .ob-feature-item_bg {
                background-color: #F8EAD8;
            }

            .icon-holder {
                height: 5rem;
                width: 5rem;
                text-align: center;
                z-index: 2;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid white;
                border-radius: 28px;
                margin-bottom: 1rem;
                /* backdrop-filter: blur(16px) saturate(180%); */
                /* -webkit-backdrop-filter: blur(16px) saturate(180%); */
                background-color: rgba(17, 25, 40, 0.25);
                border-radius: 12px;
                border: 1px solid rgba(255, 255, 255, 0.125);
                filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125));
                flex: none;
            }

            .icon-holder i {
                font-size: 3rem;
            }

            .icon-holder svg {
                width: 3rem;
                height: 3rem;
            }

            @media (max-width: 768px) {
                .ob-feature-item_link {
                    flex-direction: column;
                    text-align: center;
                }
            }
        </style>

    </x-slot>


    <div style="min-height:100vh;" class="twm-home4-banner-section ">
        <div class="row splide">
            <!--Left Section-->
            <div class="splide__track">

                <div class="splide__list">


                    <div data-splide-hash="01" class="col-xl-12 col-lg-12 splide__slide col-md-12">
                        <div style="max-width: 100% !important;" class="twm-bnr-left-section px-2">
                            <div class="twm-bnr-title-large text-primary">
                                <h2 class="text-primary mb-1">
                                    Make <br>
                                    ideas <br>
                                    happen
                                </h2>
                            </div>
                            <div class="twm-bnr-discription mb-2">Join the most comprehensive service
                                marketplace.</div>

                            <h2 class="text-primary">
                                Join the waitlist today and enjoy benefits
                            </h2>
                            <p class="mb-1">
                                No service charge for client for first 5 projects
                            </p>
                            <p class="mb-2">
                                Get Obillia Extra free of cost for service providers for 3 months


                            </p>
                            <div class="btn-container mt-4">
                                <button data-bs-toggle="modal" data-wish-for="seller" data-bs-target="#waitlist"
                                    class="call-to-action-btn ">Waitlist for sellers</button>
                                <button data-bs-toggle="modal" data-wish-for="client" data-bs-target="#waitlist"
                                    class="call-to-action-btn outline">Waitlist for clients</button>
                            </div>
                        </div>
                    </div>
                    <div data-splide-hash="02" class="col-xl-12 col-lg-12  splide__slide col-md-12">
                        <div style="max-width: 100% !important;" class="twm-bnr-left-section px-2">
                            <div class="twm-bnr-title-large text-primary">
                                <h2 class="text-primary mb-1">
                                    Discover<br>
                                    the <br>
                                    best
                                </h2>
                            </div>
                            <div class="twm-bnr-discription text-danger mb-2">It's easy, safe, and flexible.</div>

                            <h2 class="text-primary">
                                Join the waitlist today and enjoy benefits
                            </h2>
                            <p class="mb-1">
                                No service charge for client for first 5 projects
                            </p>
                            <p class="mb-2">
                                Get Obillia Extra free of cost for service providers for 3 months


                            </p>
                            <div class="btn-container mt-4">
                                <button data-bs-toggle="modal" data-bs-target="#waitlist"
                                    class="call-to-action-btn outline">Waitlist for sellers</button>
                                <button data-bs-toggle="modal" data-bs-target="#waitlist"
                                    class="call-to-action-btn ">Waitlist for clients</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="about" class="container my-5 hide-nav-on-view">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-orange">
                    Hiring on-demand talent made easy.
                </h2>
                <p class="text-primary fs-5">
                    Obillia is redefining the way freelance outsourcing is executed in India. With the rise of
                    freelancers and the gig economy in India, hiring freelancers for contract work is smooth with our
                    easy-to-use talent marketplace. Find your best online services partner from a pan India talent pool,
                    be it web development services, graphic design services in India or photographers for your special
                    occasion, we have it covered.
                </p>
            </div>
            <div class="col-md-6 col-sm-none">

                <img src="{{ asset('images/gallery/pic12.jpg') }}" alt="hero" class="img-fluid">

            </div>
        </div>
    </div>
    <div id="categories" class="container my-5 ">
        <div class="row">
            <div class="col-md-12 position-relative mb-5 pe-5">
                <h1 class="text-primary">
                    Discover catogeries
                </h1>
                <a href="#" class="btn btn-primary position-absolute end-0 bottom-0">View all</a>
            </div>

            <div class="col-12">
                <div class="section-content">
                    <div class="owl-carousel category-corousel owl-btn-bottom-center ">
                        @forelse ($categories as $cat)
                            <div>
                                <div class="category-item-card">
                                    <div class="img-container">
                                        <img src="{{ asset($cat->image) }}" alt="{{ $cat->name }}">
                                    </div>
                                </div>
                                <div class="text-center text-primary mt-4">
                                    <a href="#">
                                        <h4 class="text-primary"> {{ $cat->name }}</h4>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <h4>
                                No categories found
                            </h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="how-it-works" class="container my-5  features-section">
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
                                        class="icon icon-tabler icon-tabler-shield-check" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M11.46 20.846a12 12 0 0 1 -7.96 -14.846a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 -.09 7.06">
                                        </path>
                                        <path d="M15 19l2 2l4 -4"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Create your profile.
                                    </h4>
                                    <p>
                                        Build your profile with an engaging bio and portfolio with images and videos
                                        that help clients
                                        make easier decisions. Don't forget to add your skills, work history, education
                                        and most
                                        importantly your photo to your profile. Each service you list can act as an
                                        independent
                                        profile, so make sure all of them stand out.
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
                                        Find ways to earn.
                                    </h4>
                                    <p class="">
                                        In Obillia you can work in different ways, apply to jobs, get invited to job
                                        posts by clients, or
                                        be contacted by a client via chat. Once you are selected, send them a contract
                                        through chat
                                        and your project workspace opens. No fixed prices for projects, and no fixed
                                        hourly rates. You
                                        decide what you bill.
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
                                        Bring your own client.
                                    </h4>
                                    <p class="">
                                        Do you work with clients externally? Bring them to Obillia at no platform fee
                                        for a limited
                                        number of monthly credits. Just fill in the basic details of your client and
                                        send an application
                                        via your dashboard. Once they accept, you can have them directly in your chat,
                                        send them a
                                        contract and commence your project.
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
                                        Using the workspace.
                                    </h4>
                                    <p class="">
                                        Obillia automatically creates workspaces for each contract accepted. Engage,
                                        share, track,
                                        deliver and monitor your projects. Share files up to 20GB*.
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
                                        Working with other sellers.
                                    </h4>
                                    <p class="">
                                        As a seller, you might seek services from fellow sellers in the platform, at
                                        Obillia you as a
                                        seller can post jobs, message other sellers and receive contracts. Working with
                                        other sellers
                                        helps you to add value to your offerings by outsourcing your requirements or
                                        creating
                                        collaborated projects.
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
                                        Invoicing.

                                    </h4>
                                    <p class="">
                                        All invoices to clients in Obillia are automated and GST-compliant. We
                                        understand the
                                        struggle of freelancers in India in terms of invoicing. You only have to do what
                                        you love in
                                        Obillia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-12 my-3">
                        <div class="ob-feature_item">
                            <div class="ob-feature-item_link">
                                <div class="ob-feature-item_bg"></div>
                                <div class="icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-zoom-money" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                        <path d="M12 7h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                        <path d="M10 13v1m0 -8v1"></path>
                                    </svg>
                                </div>
                                <div class="inner-text">
                                    <h4 class="">
                                        Get paid securely. </h4>
                                    <p class="">
                                        Get paid to your Indian Bank account directly. Our payment protection releases
                                        client
                                        payments at project milestones approvals. No hourly projects. Our platform fees
                                        are
                                        applicable and so are any taxes and applicable government deductions. Spend less
                                        time
                                        chasing what you are owed, and focus on what you love.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <small>
                            To know more about how Obillia works for Sellers <a class="text-danger"
                                href="#">please read here</a>.
                            <br>
                            *Conditions vary for GST registered Sellers <a class="text-danger" href="#">please
                                read here</a>.
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
                                        Post a Job and hire a service provider.
                                    </h4>
                                    <p class="">
                                        Once you sign in, you can post a job and accept applications or invite suggested
                                        candidates
                                        to apply. You can chat with the sellers who have applied and request a contract
                                        proposal.
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
                                        Browse through freelancer profiles.
                                    </h4>
                                    <p class="">
                                        If you want to find the best-suited talent for your project, you can browse
                                        through services
                                        based on category, find the best partner, open a chat, and discuss with them
                                        your scope,
                                        timeline and budget. Request for a contract proposal and get working.
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
                                        All-in-one workspace.
                                    </h4>
                                    <p class="">
                                        Gone are the days you needed to engage with your freelancer via email, messaging
                                        apps,
                                        storage solutions etc. With the workspace in Obillia built for efficiency, you
                                        will be able to stay
                                        in touch with your freelancer and be updated in real-time.
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
                                        Get GST invoices always.
                                    </h4>
                                    <p class="">
                                        Are you finding it difficult to receive GST invoices while working with
                                        freelancers, with Obillia,
                                        you are always sure to get invoices that are GST-compliant.
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
                                        Safe payments.
                                    </h4>
                                    <p class="">
                                        When you fund a milestone/project to activate the order, Obillia does not
                                        release the
                                        payment to the seller until you approve the delivered milestone/project. In
                                        milestone
                                        contracts, you only pay for the milestone coming up.
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
                                        class="icon icon-tabler icon-tabler-user-pin" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                                        Get service providers that match your requirements under your job posting.
                                        Invite them to
                                        apply or message them directly, as a client you always have full access to
                                        every service
                                        provider here.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" class="col-md-12 my-3">
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
                                        Partner or Bundled services.
                                    </h4>
                                    <p class="">
                                        Obillia works with certain exclusive partner agencies or individuals in certain
                                        categories,
                                        these partners are vetted thoroughly, have a great track record and usually have
                                        a team of
                                        their own. Obillia will get in touch with your request and set up a meeting with
                                        the partners
                                        for you to discuss your scope.
                                        For services that require the service of multiple freelancers from multiple
                                        categories, please
                                        get in touch by clicking the "Need Bundled Services" tab and filling out the
                                        form, our team
                                        will get in touch with you, understand your scope and pick the best sellers for
                                        your
                                        requirements. Once you approved, the project commences with all the freelancers
                                        in one
                                        place.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <small>
                            To know more about how Obillia works for clients please <a class="text-danger"
                                href="#">please read here</a>.
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

    <x-section.plan :packages="$packages" />


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
                        //10 digit pattern
                        'pattern' => '^\d{10}$',
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
                $('#wish-for').val(
                    wishFor);

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
