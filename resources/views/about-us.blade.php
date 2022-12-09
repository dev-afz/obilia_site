<x-layout>

    <x-slot:title> Contact Us</x-slot>

        <x-section.about />

        <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area2">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div>How It Works </div>
                            </div>
                            <h2 class="wt-title">Follow our steps we will help you.</h2>

                        </div>
                        <ul class="description-list">
                            <li>
                                <i class="feather-check"></i>
                                Trusted & Quality Job
                            </li>
                            <li>
                                <i class="feather-check"></i>
                                International Job
                            </li>
                            <li>
                                <i class="feather-check"></i>
                                No Extra Charge
                            </li>
                            <li>
                                <i class="feather-check"></i>
                                Top Companies
                            </li>
                        </ul>
                        <!-- TITLE END-->
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="twm-w-process-steps-2-wrap">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div class="twm-w-pro-top bg-clr-sky-light bg-sky-light-shadow">
                                            <span class="twm-large-number text-clr-sky">01</span>
                                            <div class="twm-media">
                                                <span><img src="images/work-process/icon1.png" alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">Register<br>Your Account</h4>
                                            <p>You need to create an account to find the best and preferred job.</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div class="twm-w-pro-top bg-clr-yellow-light bg-yellow-light-shadow">
                                            <span class="twm-large-number text-clr-yellow">02</span>
                                            <div class="twm-media">
                                                <span><img src="images/work-process/icon4.png" alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">Search <br>
                                                Your Job</h4>
                                            <p>You need to create an account to find the best and preferred job.</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div class="twm-w-pro-top bg-clr-pink-light bg-pink-light-shadow">
                                            <span class="twm-large-number text-clr-pink">03</span>
                                            <div class="twm-media">
                                                <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">Apply <br>For Dream Job</h4>
                                            <p>You need to create an account to find the best and preferred job.</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div class="twm-w-pro-top bg-clr-green-light bg-clr-light-shadow">
                                            <span class="twm-large-number text-clr-green">04</span>
                                            <div class="twm-media">
                                                <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">Upload <br>Your Resume</h4>
                                            <p>You need to create an account to find the best and preferred job.</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="twm-how-it-work-section">

                </div>
            </div>

        </div>
        <!-- JOBS CATEGORIES SECTION START -->
        <x-section.category :categories="$categories" />
        <!-- JOBS CATEGORIES SECTION END -->
</x-layout>
