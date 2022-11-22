<!--Signup popup -->
<div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">


            <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                <p>Sign Up and get access to all the features of Jobzilla</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="twm-tabs-style-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <!--Signup Candidate-->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate"
                                type="button"><i class="fas fa-user-tie"></i>Service Provider</button>
                        </li>
                        <!--Signup Employer-->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer"
                                type="button"><i class="fas fa-building"></i>Employer</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!--Signup Candidate Content-->
                        <div class="tab-pane fade show active" id="sign-candidate">
                            <form data-sign-up>
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="name" type="text" required="" class="form-control"
                                                placeholder="Name*">

                                            <input type="hidden" name="type" value="service_provider">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="phone" type="text" class="form-control" required=""
                                                placeholder="Email*">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="email" type="text" class="form-control" required=""
                                                placeholder="Password*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="password_confirmation" type="text" class="form-control"
                                                required="" placeholder="Confirm Password*">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <div class=" form-check">
                                                <input name="" type="checkbox" class="form-check-input"
                                                    id="agree1">
                                                <label class="form-check-label" for="agree1">I agree to the <a
                                                        href="javascript:;">Terms and conditions</a></label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="site-button mb-2">Sign Up</button>
                                        <p class="text-end">Already registered?
                                            <button class="twm-backto-login " data-bs-target="#login_popup"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">Log in
                                                here</button>
                                        </p>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!--Signup Employer Content-->
                        <div class="tab-pane fade" id="sign-Employer">
                            <form data-sign-up>
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="username" type="text" required="" class="form-control"
                                                placeholder="Usearname*">
                                            <input type="hidden" name="type" value="client">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="phone" type="text" class="form-control" required=""
                                                placeholder="Email*">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="email" type="text" class="form-control" required=""
                                                placeholder="Password*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="password_confirmation" type="text" class="form-control"
                                                required="" placeholder="Confirm Password*">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <div class=" form-check">
                                                <input type="checkbox" class="form-check-input" id="agree2">
                                                <label class="form-check-label" for="agree2">I agree to the
                                                    <a href="javascript:;">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="site-button mb-2">Sign Up</button>
                                        <p class="text-end">Already registered?
                                            <button class="twm-backto-login " data-bs-target="#login_popup"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">Log in
                                                here</button>
                                        </p>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>

</div>
<!-- Modal End -->

<!--Login popup -->
<div class="modal fade twm-sign-up" id="login_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">


            <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                <p>Login and get access to all the features of Jobzilla</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form data-login>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <input name="username" type="text" required="" class="form-control"
                                    placeholder="Usearname*">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <input name="email" type="text" class="form-control" required=""
                                    placeholder="Password*">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <div class=" form-check">
                                    <input type="checkbox" class="form-check-input" id="Password3">
                                    <label class="form-check-label rem-forgot" for="Password3">Remember me
                                        <a href="javascript:;">Forgot
                                            Password</a></label>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="site-button">Log in</button>
                            <div class="mt-3 mb-3">Don't have an account ?
                                <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Sign
                                    Up</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span class="modal-f-title">Login or Sign up with</span>
                <ul class="twm-modal-social">
                    <li><a href="javascript" class="facebook-clr"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="javascript" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="javascript" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li><a href="javascript" class="google-clr"><i class="fab fa-google"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!--Model Popup  End-->

@pushonce('component-scripts')
    <script>
        $(document).on('submit', '[data-sign-up]', function(e) {
            e.preventDefault();
            rebound({
                form: $(this),
                url: "{{ route('register') }}",
                notification: false,
                successCallback: function(res) {
                    console.log(res);
                }

            });
        });
        $(document).on('submit', '[data-login]', function(e) {
            e.preventDefault();
            rebound({
                form: $(this),
                url: "{{ route('login') }}",
                notification: false,
                successCallback: function(res) {
                    console.log(res);
                }

            });
        });
    </script>
@endpushonce
