<div class="section-full p-t120 p-b90 site-bg-white twm-testimonial-1-area">

    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-5 col-lg-6 col-md-12 wt-separator-two-part-left">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>Clients Testimonials</div>
                        </div>
                        <h2 class="wt-title">What Our Customers Say About Us</h2>
                    </div>
                    <!-- TITLE END-->
                </div>

            </div>
        </div>

        <div class="section-content">

            <div class="owl-carousel twm-testimonial-1-carousel owl-btn-bottom-center ">

                <!-- COLUMNS 1 -->
                <div class="item ">
                    <div class="twm-testimonial-1">
                        <div class="twm-testimonial-1-content">
                            <div class="twm-testi-media">
                                <img src="images/testimonials/pic-1.png" alt="#">
                            </div>
                            <div class="twm-testi-content">
                                <div class="twm-quote">
                                    <img src="images/quote-dark.png" alt="">
                                </div>
                                <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used
                                    the site all the time during my job hunt.</div>
                                <div class="twm-testi-detail">
                                    <div class="twm-testi-name">Nikola Tesla</div>
                                    <div class="twm-testi-position">Accountant</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- COLUMNS 2 -->
                <div class="item ">
                    <div class="twm-testimonial-1">
                        <div class="twm-testimonial-1-content">
                            <div class="twm-testi-media">
                                <img src="images/testimonials/pic-2.png" alt="#">
                            </div>
                            <div class="twm-testi-content">
                                <div class="twm-quote">
                                    <img src="images/quote-dark.png" alt="">
                                </div>
                                <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used
                                    the site all the time during my job hunt.</div>
                                <div class="twm-testi-detail">
                                    <div class="twm-testi-name">Nikola Tesla</div>
                                    <div class="twm-testi-position">Accountant</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- COLUMNS 3 -->
                <div class="item ">
                    <div class="twm-testimonial-1">
                        <div class="twm-testimonial-1-content">
                            <div class="twm-testi-media">
                                <img src="images/testimonials/pic-3.png" alt="#">
                            </div>
                            <div class="twm-testi-content">
                                <div class="twm-quote">
                                    <img src="images/quote-dark.png" alt="">
                                </div>
                                <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used
                                    the site all the time during my job hunt.</div>
                                <div class="twm-testi-detail">
                                    <div class="twm-testi-name">Nikola Tesla</div>
                                    <div class="twm-testi-position">Accountant</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- COLUMNS 4 -->
                <div class="item ">
                    <div class="twm-testimonial-1">
                        <div class="twm-testimonial-1-content">
                            <div class="twm-testi-media">
                                <img src="images/testimonials/pic-2.png" alt="#">
                            </div>
                            <div class="twm-testi-content">
                                <div class="twm-quote">
                                    <img src="images/quote-dark.png" alt="">
                                </div>
                                <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used
                                    the site all the time during my job hunt.</div>
                                <div class="twm-testi-detail">
                                    <div class="twm-testi-name">Nikola Tesla</div>
                                    <div class="twm-testi-position">Accountant</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- COLUMNS 5 -->
                <div class="item ">
                    <div class="twm-testimonial-1">
                        <div class="twm-testimonial-1-content">
                            <div class="twm-testi-media">
                                <img src="images/testimonials/pic-1.png" alt="#">
                            </div>
                            <div class="twm-testi-content">
                                <div class="twm-quote">
                                    <img src="images/quote-dark.png" alt="">
                                </div>
                                <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used
                                    the site all the time during my job hunt.</div>
                                <div class="twm-testi-detail">
                                    <div class="twm-testi-name">Nikola Tesla</div>
                                    <div class="twm-testi-position">Accountant</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>


@pushOnce('component-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endPushOnce


@pushOnce('component-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endPushOnce

@push('component-scripts')
    <script>
        $('.twm-testimonial-1-carousel').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            margin: 30,
            autoplay: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                991: {
                    items: 2,
                }

            }
        });
    </script>
@endpush
