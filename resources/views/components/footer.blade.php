<footer class="footer-dark text-white bg-black">
    <div class="container">
        <div class="">
            <div class="row">

                <div class="col-lg-3 col-md-12">

                    <div class="widget widget_about">
                        <div class="logo-footer clearfix">
                            <a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt=""></a>
                        </div>
                        <p>Many desktop publishing packages and web page editors now.</p>
                        <ul class="ftr-list">
                            <li>
                                <p><span>Address :</span>65 Sunset CA 90026, USA </p>
                            </li>
                            <li>
                                <p><span>Email :</span>example@max.com</p>
                            </li>
                            <li>
                                <p><span>Call :</span>555-555-1234</p>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="row">

                        @auth
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title text-white">Links</h3>
                                    <ul>
                                        <li><a href="#">User Dashboard</a></li>
                                        <li><a href="#">Invites</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Chat</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endauth



                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Policies</h3>
                                <ul>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">T&C</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('plans') }}">Plans</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom">

            <div class="footer-bottom-info">

                <div class="footer-copy-right">
                    <span class="copyrights-text">Copyright © 2022 by Obillia All Rights Reserved.</span>
                </div>
                <ul class="social-icons">
                    <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                    <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                    <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                    <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                </ul>

            </div>

        </div>

    </div>

</footer>
