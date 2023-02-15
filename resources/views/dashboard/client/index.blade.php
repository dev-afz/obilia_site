<x-dashboard.layout>
    <x-slot:title> Dashboard </x-slot>
        <x-slot name="styles">
            <style>

            </style>
        </x-slot>
        <div id="content">

            <div class="content-admin-main">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="briefcase-blank"
                                                class="svg-inline--fa fa-briefcase-blank fa-w-16" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-288C0 117.5 21.5 96 48 96h416C490.5 96 512 117.5 512 144z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M176 96H128V48C128 21.5 149.5 0 176 0h160C362.5 0 384 21.5 384 48V96h-48V48h-160V96z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Active Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_active_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="briefcase-blank"
                                                class="svg-inline--fa fa-briefcase-blank fa-w-16" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-288C0 117.5 21.5 96 48 96h416C490.5 96 512 117.5 512 144z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M176 96H128V48C128 21.5 149.5 0 176 0h160C362.5 0 384 21.5 384 48V96h-48V48h-160V96z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Pending Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_pending_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="briefcase-blank"
                                                class="svg-inline--fa fa-briefcase-blank fa-w-16" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-288C0 117.5 21.5 96 48 96h416C490.5 96 512 117.5 512 144z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M176 96H128V48C128 21.5 149.5 0 176 0h160C362.5 0 384 21.5 384 48V96h-48V48h-160V96z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Completed Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_completed_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="briefcase-blank"
                                                class="svg-inline--fa fa-briefcase-blank fa-w-16" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-288C0 117.5 21.5 96 48 96h416C490.5 96 512 117.5 512 144z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M176 96H128V48C128 21.5 149.5 0 176 0h160C362.5 0 384 21.5 384 48V96h-48V48h-160V96z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Cancelled Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_cancelled_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="briefcase-blank"
                                                class="svg-inline--fa fa-briefcase-blank fa-w-16" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-288C0 117.5 21.5 96 48 96h416C490.5 96 512 117.5 512 144z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M176 96H128V48C128 21.5 149.5 0 176 0h160C362.5 0 384 21.5 384 48V96h-48V48h-160V96z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</x-dashboard.layout>
