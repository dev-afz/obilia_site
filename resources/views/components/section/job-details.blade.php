<div class="container">
    <div class="section-content">
        <div class="twm-job-self-wrap twm-job-detail-v2">
            <div class="twm-job-self-info">
                <div class="twm-job-self-top">
                    {{-- <div class="twm-media-bg">

                        <div class="twm-job-self-bottom">
                            @auth()
                                @if (auth()->user()->role !== 'client')
                                    @if (empty($job->application))
                                        <a class="site-button" data-bs-toggle="modal" href="#apply_job_popup" role="button">
                                            Apply Now
                                        </a>
                                    @else
                                        <span class="site-button">Already Applied</span>
                                    @endif
                                @endif
                            @endauth

                            @guest()
                                <a href="#login_popup" data-bs-toggle="modal" class="twm-nav-post-a-job site-button"> Login
                                    To apply
                                </a>
                            @endguest
                        </div>

                    </div> --}}

                    <div class="twm-mid-content">

                        <h4 class="twm-job-title">{{ $job->title }} </h4>
                        <p>
                            {{ $job->sub_category->name }}
                        </p>
                        <div class="twm-job-self-mid">

                            <div class="twm-job-apllication-area">Application ends:
                                <span class="twm-job-apllication-date">October 1, 2025</span>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="twm-job-detail-2-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-12 rightSidebar">

                    <div class="side-bar mb-4">
                        <div class="twm-s-info2-wrap mb-5">
                            <div class="twm-s-info2">
                                <div class="text-center mb-4">
                                    <img height="150px" width="150px" class="job__banner" src="{{ $job->banner }}"
                                        alt="#">
                                </div>
                                <h4 class="section-head-small mb-4">Job Information</h4>
                                <ul class="twm-job-hilites2">
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-file-signature"></i>
                                            <span class="twm-title">No of Bids</span>
                                            <div class="twm-s-info-discription">{{ $job->applications_count }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-stopwatch"></i>
                                            <span class="twm-title">Work Hours</span>
                                            <div class="twm-s-info-discription">{{ $job->work_hours }}
                                                Hrs.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-eye"></i>
                                            <span class="twm-title">Job Views</span>
                                            <div class="twm-s-info-discription">8160 Views</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="twm-title">size</span>
                                            <div class="twm-s-info-discription text-capitalize">
                                                {{ $job->size }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-clock"></i>
                                            <span class="twm-title">Experience</span>
                                            <div class="twm-s-info-discription">
                                                {{ $job->experience->name }}</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-calendar"></i>
                                            <span class="twm-title">Length</span>
                                            <div class="twm-s-info-discription">
                                                {{ $job->work_length->name }}</div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="twm-s-info-inner">

                                            <i class="fas fa-money-bill-wave"></i>
                                            <span class="twm-title">Budget</span>
                                            <div class="twm-s-info-discription">
                                                ₹{{ $job->rate_from }} -₹{{ $job->rate_to }}
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div class="widget tw-sidebar-tags-wrap">
                            <h4 class="section-head-small mb-4">Job Skills</h4>

                            <div class="tagcloud">
                                @forelse ($job->skills as $skill)
                                    <a href="javascript:void(0)">{{ $skill->skill->name ?? $skill->other_skill }}</a>
                                @empty
                                @endforelse
                            </div>
                        </div>

                    </div>

                    @if ($showAd)
                        <div class="twm-advertisment m-b0" style="background-image:url(images/add-bg.jpg);">
                            <div class="overlay"></div>
                            <h4 class="twm-title">Looking for talent?</h4>
                            <p>Get Best Matched Jobs On your <br>
                                Email. Add Resume NOW!</p>
                            <a href="javascript:;" class="site-button white">Read More</a>
                        </div>
                    @endif


                </div>

                <div class="col-lg-8 col-md-12">
                    <!-- Candidate detail START -->
                    <div class="cabdidate-de-info">

                        <div>
                            <h4 class="twm-s-title m-t0">Job Description:</h4>
                            <p>
                                {{ $job->description }}
                            </p>
                            <h4 class="twm-s-title">Responsibilities:</h4>
                            <ul class="description-list-2">
                                @forelse ($job->responsibilities as $res)
                                    <li>
                                        <i class="feather-check"></i>
                                        {{ $res->responsibility }}
                                    </li>
                                @empty
                                @endforelse
                            </ul>

                        </div>
                        <div class="twm-job-self-bottom text-center mt-5">
                            @auth()
                                @if (auth()->user()->role !== 'client')
                                    @if (empty($job->application))
                                        <a class="site-button" data-bs-toggle="modal" href="#apply_job_popup"
                                            role="button">
                                            Apply Now
                                        </a>
                                    @else
                                        <span class="site-button">Already Applied</span>
                                    @endif
                                @endif
                            @endauth

                            @guest()
                                <a href="#login_popup" data-bs-toggle="modal" class="twm-nav-post-a-job site-button"> Login
                                    To apply
                                </a>
                            @endguest
                        </div>
                        <div>
                            <h4 class="twm-s-title">Share Profile</h4>
                            <div class="twm-social-tags">
                                <a href="javascript:void(0)" class="fb-clr">Facebook</a>
                                <a href="javascript:void(0)" class="tw-clr">Twitter</a>
                                <a href="javascript:void(0)" class="link-clr">Linkedin</a>
                                <a href="javascript:void(0)" class="whats-clr">Whatsapp</a>
                                <a href="javascript:void(0)" class="pinte-clr">Pinterest</a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@auth()
    @if (auth()->user()->role !== 'client')
        <div class="modal fade" id="apply_job_popup" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title" id="sign_up_popupLabel">Apply For This Job</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="apl-job-inpopup">
                            <!--Basic Information-->
                            <div class="panel panel-default">

                                <div class="panel-body wt-panel-body p-a20 ">

                                    <div class="twm-tabs-style-1">

                                        <form data-job-application>
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <x-utils.input name="price" type="number" />
                                                    <x-utils.input name="id" :value="$job->id" type="hidden" />

                                                </div>
                                                <div class="col-md-12">
                                                    <x-utils.input name="work_letter" type="textarea" />
                                                </div>
                                                <div class="col-md-12">
                                                    <x-utils.input :required="false" name="additional_document"
                                                        type="file" />
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input name="terms" type="checkbox"
                                                                class="form-check-input" id="terms-and-conditions">
                                                            <label class="form-check-label" for="terms-and-conditions">I
                                                                agree to the
                                                                <a href="javascript:;">Terms and conditions</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="site-button">Send
                                                            Application</button>
                                                    </div>
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

        </div>
    @endif
@endauth


@push('component-scripts')
    <script>
        $(document).on('submit', '[data-job-application]', function(e) {
            e.preventDefault();
            if (window.validateRequired($(this))) {
                return
            }
            window.rebound({
                form: $(this),
                url: "{{ route('service-provider.job.apply') }}",
                successCallback: function(response) {
                    setTimeout(() => {
                        window.location.reload();
                    }, 100);
                }
            });
        });
    </script>
@endpush
