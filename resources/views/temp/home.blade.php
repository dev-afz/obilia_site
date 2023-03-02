<x-layout :newHeader="true">

    <x-slot name="title"> Home </x-slot>
    <x-slot name="styles">
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-url-hash@0.3.0/dist/js/splide-extension-url-hash.min.js">
        </script>
        <style>


        </style>
    </x-slot>


    <div class="twm-home4-banner-section ">
        <div class="row splide">
            <!--Left Section-->
            <div class="splide__track">

                <div class="splide__list">


                    <div data-splide-hash="01" class="col-xl-12 col-lg-12 splide__slide col-md-12">
                        <div style="max-width: 100% !important;" class="twm-bnr-left-section">
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
                                <a href="#01" class="call-to-action-btn ">Wishlist for sellers</a>
                                <a href="#02" class="call-to-action-btn outline">Wishlist for clients</a>
                            </div>
                        </div>
                    </div>
                    <div data-splide-hash="02" class="col-xl-12 col-lg-12  splide__slide col-md-12">
                        <div style="max-width: 100% !important;" class="twm-bnr-left-section">
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
                                <a href="#01" class="call-to-action-btn outline">Wishlist for sellers</a>
                                <a href="#02" class="call-to-action-btn ">Wishlist for clients</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <x-slot:scripts>
        <script>
            var splide = new Splide('.splide', {
                arrows: false
                , pagination: true
            });

            splide.mount(window.splide.Extensions);

        </script>
    </x-slot:scripts>
</x-layout>