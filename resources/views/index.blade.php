<x-layout>

    <x-slot name="title"> Home </x-slot>

    <x-slot name="styles">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    </x-slot>

    <x-section.hero />
    <div class="container my-5 hide-nav-on-view">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-orange">
                    Find talented partners
                    for your projects
                </h2>
                <p class="text-primary fs-5">
                    We are redefining how projects are executed with our talent marketplace and specialised
                    services. We cross-connect businesses, agencies and artists with skilled freelancers and service
                    providers who aspire to work on what they love. Obillia is secure, flexible and convenient for
                    everyone.
                </p>
            </div>
            <div class="col-md-6 col-sm-none">

                <img src="{{ asset('images/gallery/pic12.jpg') }}" alt="hero" class="img-fluid">

            </div>
        </div>
    </div>
    <div class="container my-5 ">
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
                                    <h4 class="text-primary"> {{ $cat->name }}</h4>
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
    <div class="container my-5  features-section">
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
                <div class="row mx-5 mt-5">
                    <div class="col-md-7">
                        <h3 class="fs-2 mt-5">
                            Secure and timely payouts
                        </h3>
                        <p class="fs-5">
                            Clients pay upfront, so you can be sure of payments against deliverables. We ensure your
                            payouts are on time through our automated systems that run on the best payment software
                        </p>

                        <h3 class="fs-2 mt-5">
                            Send custom quotes everytime
                        </h3>
                        <p class="fs-5">
                            Each client and project is different, so why should prices be fixed? Send custom contracts
                            with milestones for unique projects & clients.
                        </p>
                        <h3 class="fs-2 mt-5">
                            All in one workspace
                        </h3>
                        <p class="fs-5">
                            Keep in touch with your client always through project-based workspaces with milestone
                            tracking, chat, file sharing and many more.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Automated Invoicing
                        </h3>
                        <p class="fs-5">
                            We want our partners to do what they love the most, forget the rest, we fulfil everything
                            else. Get copies of your invoices for Tax Purposes automatically from your dashboard.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Collaborate with other sellers
                        </h3>
                        <p class="fs-5">
                            Want to create projects with other sellers, feel free to connect and get the same features
                            as collaborating with clients.
                            Please note, currently Obillia only supports one-one collabs, group collabs will be coming
                            soon.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Bring your own client
                        </h3>
                        <p class="fs-5">
                            Working with clients externally? Bring them to obillia at zero cost or flat rates based on
                            your plan. We send them GST-compliant invoices, you can track all your projects in one
                            place. Easy for you, easy for your client.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Do more, earn more with our curated plans
                        </h3>
                        <p class="fs-5">
                            It's always free* to join obillia as a freelancer. we deduct a platform fee for using our
                            resources on the free or extra plan, however, with Obillia Plus you can do more and cancel
                            the platform fees from each project. Read more about our plans here .
                        </p>
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
                <div class="row mx-5 mt-5">
                    <div class="col-md-7">
                        <h3 class="fs-2 mt-5">
                            Services for your budget.
                        </h3>
                        <p class="fs-5">
                            A startup or a large media house? Doesn't matter, find quality service providers for your
                            budget.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Verified sellers
                        </h3>
                        <p class="fs-5">
                            We ensure that all sellers are verified for the safety and security of our clients.
                            Non-background verified profiles and services are never live on Obillia.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Protected payments
                        </h3>
                        <p class="fs-5">
                            Remember you pay upfront for projects/milestones, but payments aren't released until you
                            approve the deliveried work.
                        </p>
                        <h3 class="fs-2 mt-5">
                            All in one workspace
                        </h3>
                        <p class="fs-5">
                            Keep in touch with your freelancer always through project-based workspaces with milestone
                            tracking, chat, file sharing and many more.
                        </p>
                        <h3 class="fs-2 mt-5">
                            GST compliant invoices
                        </h3>
                        <p class="fs-5">
                            Are you a business owner finding it challenging to get Freelance services with GST invoices?
                            Worry no more, all invoices to clients in Obillia are GST compliant, fill up your GSTIN and
                            you are good to go. You don't have to worry if your freelancer is registered or not.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Post a job or hire directly.
                        </h3>
                        <p class="fs-5">
                            Experience multiple approaches to hiring your project partner in Obillia either via posting
                            a job or reaching out to a freelance service provider directly.
                        </p>
                        <h3 class="fs-2 mt-5">
                            Get matched suggestions.
                        </h3>
                        <p class="fs-5">
                            Get service providers that match your requirements under your job posting. Invite them to
                            apply or message them directly, as a client you always have full access to every service
                            provider here.
                        </p>
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
    <div class="container my-5  ">
        <div class="row">
            <div class="col-md-12 position-relative mb-5 pe-5">
                <h1 class="text-primary">
                    Discover catogeries
                </h1>
                <a href="#" class="btn btn-primary position-absolute end-0 bottom-0">View all</a>
            </div>

            <div class="col-12">
                <div class="section-content">
                    <div class="owl-carousel job-corousel owl-btn-bottom-center ">
                        @forelse ($jobs as $job)
                            <div class="item row match-height">
                                <x-elements.job-card class="col-12" :job="$job" />
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



        <script>
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



            $(window).scroll(function() {
                // if scroll crossed .hide-nav-on-view class element
                if ($(this).scrollTop() > $('.hide-nav-on-view').offset().top - 250) {
                    $('.main-bar').css('top', '-5rem');
                } else {
                    $('.main-bar').css('top', '0');
                }
            });
        </script>

    </x-slot>
</x-layout>
