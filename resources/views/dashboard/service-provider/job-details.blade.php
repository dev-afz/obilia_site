<x-dashboard.layout>
    <x-slot:title> Jobs Details </x-slot>
        <div id="content">

            <div class="content-admin-main">
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Job Details</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <x-section.job-details :job="$job" :showAd="false" />
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 ">
                                <div class=" _wrap_box_slice">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="suggested-candidates-tab-fill"
                                                    data-bs-toggle="tab" href="#suggested-candidates-fill"
                                                    role="tab" aria-controls="suggested-candidates-fill"
                                                    aria-selected="true">Suggested
                                                    Candidates</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="application-tab-fill" data-bs-toggle="tab"
                                                    href="#application-fill" role="tab"
                                                    aria-controls="application-fill"
                                                    aria-selected="true">Applications</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="invite-tab-fill" data-bs-toggle="tab"
                                                    href="#invite-fill" role="tab" aria-controls="invite-fill"
                                                    aria-selected="false">Invites</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="shortlisted-tab-fill" data-bs-toggle="tab"
                                                    href="#shortlisted-fill" role="tab"
                                                    aria-controls="shortlisted-fill"
                                                    aria-selected="false">shortlisted</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">
                                            <div class="tab-pane active" id="suggested-candidates-fill" role="tabpanel"
                                                aria-labelledby="suggested-candidates-tab-fill">
                                                <div data-suggested-candidate class="row">
                                                    <x-misc.service-provider-skeleton-loader class="col-md-4 mt-5"
                                                        :count="6" />

                                                </div>

                                            </div>
                                            <div class="tab-pane " id="application-fill" role="tabpanel"
                                                aria-labelledby="application-tab-fill">
                                                <div data-job-applications class="row">
                                                    <x-misc.service-provider-skeleton-loader class="col-md-4 mt-5"
                                                        :count="6" />
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="invite-fill" role="tabpanel"
                                                aria-labelledby="invite-tab-fill">
                                                <div data-invited-candidates class="row">
                                                    <x-misc.service-provider-skeleton-loader class="col-md-4 mt-5"
                                                        :count="6" />
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="shortlisted-fill" role="tabpanel"
                                                aria-labelledby="shortlisted-tab-fill">
                                                <div data-shortlisted-candidates class="row">
                                                    <x-misc.service-provider-skeleton-loader class="col-md-4 mt-5"
                                                        :count="6" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-loader-html hidden class="d-none">
            <x-misc.service-provider-skeleton-loader class="col-md-4 mt-5" :count="6" />
        </div>


        <x-slot name="scripts">
            <script>
                let shown = 'suggested';
                $(document).ready(function() {
                    setTimeout(() => {
                        fetchSuggestedJobs();
                    }, 1000);

                    $('#application-tab-fill').click(function(e) {
                        e.preventDefault();
                        if (shown !== 'application') {
                            shown = 'application';
                            fetchApplicantions();
                        }
                    });
                    $('#suggested-candidates-tab-fill').click(function(e) {
                        e.preventDefault();
                        if (shown !== 'suggested') {
                            shown = 'suggested';
                            fetchSuggestedJobs();
                        }
                    });
                    $('#invite-tab-fill').click(function(e) {
                        e.preventDefault();
                        if (shown !== 'invite') {
                            shown = 'invite';
                            fetchInvitedCandidates();
                        }
                    });
                    $('#shortlisted-tab-fill').click(function(e) {
                        e.preventDefault();
                        if (shown !== 'shortlisted') {
                            shown = 'shortlisted';
                            fetchShortlistedCandidates();
                        }
                    });


                    $(document).on('click', '[data-bid]', function() {
                        const data = $(this).data('bid');
                        Notiflix.Report.init({
                            className: 'notiflix-report',
                            plainText: false,
                            width: '600px',
                            messageMaxLength: 20000,
                            svgSize: '0px',
                            borderRadius: '10px',
                            // cssAnimationStyle: 'zoom',
                        });

                        let message =
                            `<div><strong>Price :</strong> ₹${data.bid_price}</div><div><p><strong>Work Letter : </strong>${data.work_letter}</p></div>`;

                        if (data.document) {
                            message +=
                                `<div class="text-center px-1"><a href="${data.document}"  target="_blank">View Document</a></div>`;
                        }

                        Notiflix.Report.info('Propasal Data', message, 'Close');

                    });

                    $(document).on('click', '[data-invite-candidate]', function(e) {
                        e.preventDefault();
                        const id = $(this).data('invite-candidate');
                        const btn = $(this);
                        btn.html('<i class="fa fa-spinner fa-spin"></i>');
                        btn.attr('disabled', true);
                        rebound({
                            data: {
                                user_id: id,
                                job_id: {{ $job->id }}
                            },
                            url: "{{ route('service-provider.job.invite-candidate') }}",
                            block: false,
                            processData: true,
                            successCallback: function(data) {
                                btn.html('Invited');
                                btn.attr('disabled', true);
                                btn.removeClass('btn-success');
                                btn.addClass('btn-flat-success');
                                $(btn).closest('[data-candidate-suggetion]').remove();
                                //check if [data-suggested-candidate] has any div
                                if ($('[data-suggested-candidate]').children().length === 0) {
                                    $('[data-suggested-candidate]').html(
                                        '<div class="col-12"><div class="alert alert-warning p-4">No more candidates to show</div></div>'
                                    );
                                }

                            },
                            errorCallback: function(data) {
                                btn.html('Invite');
                                btn.attr('disabled', false);
                            }
                        });
                    });

                    $(document).on('click', '[data-application-action]', function(e) {
                        e.preventDefault();
                        const id = $(this).data('application-id');
                        const btn = $(this);
                        const old_icon = btn.html();
                        btn.html('<i class="fa fa-spinner fa-spin"></i>');
                        btn.attr('disabled', true);
                        const status = $(this).data('application-action');

                        console.log(status, id);
                        rebound({
                            data: {
                                id: id,
                                status: status
                            },
                            url: "{{ route('service-provider.job.application-action') }}",
                            block: false,
                            processData: true,
                            successCallback: function(data) {
                                btn.parent().remove();
                                fetchApplicantions();
                            },
                            errorCallback: function(data) {
                                btn.html(old_icon);
                                btn.attr('disabled', false);
                            }
                        });
                    });

                });

                function fetchSuggestedJobs() {
                    $('[data-suggested-candidate]').html($('[data-loader-html]').html());
                    rebound({
                        data: {
                            job_id: {{ $job->id }},
                        },
                        method: 'get',
                        block: false,
                        notification: false,
                        url: "{{ route('service-provider.job.suggested-candidates') }}",
                        processData: true,
                        successCallback: function(res) {
                            if (res.status === 'success') {
                                $('[data-suggested-candidate]').html(res.html);
                            }
                        }
                    });
                }

                function fetchApplicantions() {
                    $('[data-job-applications]').html($('[data-loader-html]').html());
                    rebound({
                        data: {
                            job_id: {{ $job->id }},
                        },
                        method: 'get',
                        block: false,
                        notification: false,
                        url: "{{ route('service-provider.job.applications') }}",
                        processData: true,
                        successCallback: function(res) {
                            if (res.status === 'success') {
                                $('[data-job-applications]').html(res.html);
                            }
                        }
                    });
                }

                function fetchInvitedCandidates() {
                    $('[data-invited-candidates]').html($('[data-loader-html]').html());
                    rebound({
                        data: {
                            job_id: {{ $job->id }},
                        },
                        method: 'get',
                        block: false,
                        notification: false,
                        url: "{{ route('service-provider.job.invited-candidates') }}",
                        processData: true,
                        successCallback: function(res) {
                            if (res.status === 'success') {
                                $('[data-invited-candidates]').html(res.html);
                            }
                        }
                    });
                }

                function fetchShortlistedCandidates() {
                    $('[data-shortlisted-candidates]').html($('[data-loader-html]').html());
                    rebound({
                        data: {
                            job_id: {{ $job->id }},
                        },
                        method: 'get',
                        block: false,
                        notification: false,
                        url: "{{ route('service-provider.job.shortlisted-candidates') }}",
                        processData: true,
                        successCallback: function(res) {
                            if (res.status === 'success') {
                                $('[data-shortlisted-candidates]').html(res.html);
                            }
                        }
                    });
                }
            </script>
        </x-slot>
</x-dashboard.layout>
