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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total services</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_services }}</span>
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Applied Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $applied_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Liked Jobs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_liked_jobs }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-danger rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-solid"
                                                data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                    fill="#a83f39" />
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Active Contracts
                                        </h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_active_contracts }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="file-check" class="svg-inline--fa fa-file-check fa-w-12"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M256 0v128h128L256 0zM245.8 264.4l-79.13 92.34l-29.69-29.69c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l48 48c4.5 4.5 10.62 7.031 16.97 7.031c.3125 0 .625 0 .9062-.0313c6.688-.25 12.97-3.281 17.31-8.344l96-112c8.625-10.06 7.469-25.22-2.594-33.84C269.6 253.2 254.4 254.3 245.8 264.4z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M256 128V0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V128H256zM282.2 295.6l-96 112c-4.344 5.062-10.62 8.094-17.31 8.344C168.6 415.1 168.3 415.1 168 415.1c-6.344 0-12.47-2.531-16.97-7.031l-48-48c-9.375-9.375-9.375-24.56 0-33.94s24.56-9.375 33.94 0l29.69 29.69l79.13-92.34c8.656-10.06 23.81-11.19 33.84-2.594C289.7 270.4 290.8 285.5 282.2 295.6z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Completed Contracts</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_completed_contracts }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="memo-circle-check"
                                                class="svg-inline--fa fa-memo-circle-check fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M80 160h224C312.8 160 320 152.8 320 144S312.8 128 304 128h-224C71.16 128 64 135.2 64 144S71.16 160 80 160zM176 320h-96C71.16 320 64 327.2 64 336S71.16 352 80 352h96C184.8 352 192 344.8 192 336S184.8 320 176 320zM240 224h-160C71.16 224 64 231.2 64 240S71.16 256 80 256h160C248.8 256 256 248.8 256 240S248.8 224 240 224zM432 224C352.5 224 288 288.5 288 368s64.46 144 144 144C511.5 512 576 447.5 576 368S511.5 224 432 224zM499.3 341.1l-74.66 74.66c-3.125 3.125-7.219 4.688-11.31 4.688s-8.188-1.562-11.31-4.688l-37.34-37.33c-6.25-6.25-6.25-16.38 0-22.62s16.38-6.25 22.62 0l26.03 26.02l63.34-63.34c6.25-6.25 16.38-6.25 22.62 0S505.6 335.7 499.3 341.1z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M384 198.8V64c0-35.35-28.65-64-64-64H64C28.65 0 0 28.65 0 64v384c0 35.35 28.65 64 64 64h256c3.357 0 6.548-.487 9.766-.985C285.2 479.1 256 426.9 256 368C256 287.6 310.2 219.8 384 198.8zM176 352h-96C71.16 352 64 344.8 64 336S71.16 320 80 320h96C184.8 320 192 327.2 192 336S184.8 352 176 352zM240 256h-160C71.16 256 64 248.8 64 240S71.16 224 80 224h160C248.8 224 256 231.2 256 240S248.8 256 240 256zM80 160C71.16 160 64 152.8 64 144S71.16 128 80 128h224C312.8 128 320 135.2 320 144S312.8 160 304 160H80z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Pending Contracts</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_pending_contracts }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="file-exclamation"
                                                class="svg-inline--fa fa-file-exclamation fa-w-12" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M256 0v128h128L256 0zM192 352c13.25 0 24-10.75 24-24v-112C216 202.8 205.3 192 192 192S168 202.8 168 216v112C168 341.3 178.8 352 192 352zM192 383.1c-17.67 0-32 14.33-32 32c0 17.67 14.33 32 32 32s32-14.33 32-32C224 398.3 209.7 383.1 192 383.1z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M256 128V0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V128H256zM168 216C168 202.8 178.8 192 192 192s24 10.75 24 24v112c0 13.25-10.75 24-24 24s-24-10.75-24-24V216zM192 448c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32s32 14.33 32 32C224 433.7 209.7 448 192 448z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Cancelled Contracts</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_cancelled_contracts }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="file-excel" class="svg-inline--fa fa-file-excel fa-w-12"
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M259.4 240h-26.43c-5.557 0-10.71 2.883-13.63 7.613L192 292L164.7 247.6C161.8 242.9 156.6 240 151.1 240H124.6c-12.52 0-20.19 13.73-13.63 24.38L160 344l-48.99 79.61C104.4 434.3 112.1 448 124.6 448h26.43c5.557 0 10.71-2.883 13.63-7.617L192 396l27.31 44.38C222.2 445.1 227.4 448 232.9 448h26.43c12.52 0 20.19-13.73 13.63-24.39L224 344l48.99-79.62C279.6 253.7 271.9 240 259.4 240zM256 0v128h128L256 0z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M256 128V0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V128H256zM272.1 423.6C279.6 434.3 271.9 448 259.4 448h-26.43c-5.557 0-10.71-2.883-13.63-7.617L192 396l-27.31 44.38C161.8 445.1 156.6 448 151.1 448H124.6c-12.52 0-20.19-13.73-13.63-24.39L160 344L111 264.4C104.4 253.7 112.1 240 124.6 240h26.43c5.557 0 10.71 2.883 13.63 7.613L192 292l27.31-44.39C222.2 242.9 227.4 240 232.9 240h26.43c12.52 0 20.19 13.73 13.63 24.38L224 344L272.1 423.6z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Contracts</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_contracts }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="memo-pad" class="svg-inline--fa fa-memo-pad fa-w-14"
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M384 0H64C28.65 0 0 28.65 0 64v64h448V64C448 28.65 419.3 0 384 0zM208 400h-96C103.2 400 96 407.2 96 416c0 8.836 7.164 16 16 16h96c8.836 0 16-7.164 16-16C224 407.2 216.8 400 208 400zM336 208h-224C103.2 208 96 215.2 96 224c0 8.836 7.164 16 16 16h224C344.8 240 352 232.8 352 224C352 215.2 344.8 208 336 208zM336 304h-224C103.2 304 96 311.2 96 320c0 8.836 7.164 16 16 16h224c8.836 0 16-7.164 16-16C352 311.2 344.8 304 336 304z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M0 128v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V128H0zM208 432h-96C103.2 432 96 424.8 96 416c0-8.838 7.164-16 16-16h96c8.836 0 16 7.162 16 16C224 424.8 216.8 432 208 432zM336 336h-224C103.2 336 96 328.8 96 320c0-8.838 7.164-16 16-16h224c8.836 0 16 7.162 16 16C352 328.8 344.8 336 336 336zM336 240h-224C103.2 240 96 232.8 96 224c0-8.838 7.164-16 16-16h224C344.8 208 352 215.2 352 224C352 232.8 344.8 240 336 240z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Active Chats</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_active_chats }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="comment-check"
                                                class="svg-inline--fa fa-comment-check fa-w-16" role="img"
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
                                                        d="M346.2 199.6l-96 112C245.9 316.7 239.6 319.7 232.9 319.1C232.6 319.1 232.3 319.1 232 319.1c-6.344 0-12.47-2.531-16.97-7.031l-48-48c-9.375-9.375-9.375-24.56 0-33.94s24.56-9.375 33.94 0l29.69 29.69l79.13-92.34c8.656-10.06 23.81-11.19 33.84-2.594C353.7 174.4 354.8 189.5 346.2 199.6z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M256 31.1c-141.4 0-255.1 93.13-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.38-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.25 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM346.2 199.6l-96 112C245.9 316.7 239.6 319.7 232.9 319.1C232.6 319.1 232.3 319.1 232 319.1c-6.344 0-12.47-2.531-16.97-7.031l-48-48c-9.375-9.375-9.375-24.56 0-33.94s24.56-9.375 33.94 0l29.69 29.69l79.13-92.34c8.656-10.06 23.81-11.19 33.84-2.594C353.7 174.4 354.8 189.5 346.2 199.6z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Closed Chats</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_closed_chats }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="comment-xmark"
                                                class="svg-inline--fa fa-comment-xmark fa-w-16" role="img"
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
                                                        d="M175 320.1c9.373 9.371 24.56 9.379 33.94 0l47.03-47.03l47.03 47.03c9.373 9.371 24.56 9.379 33.94 0c9.375-9.375 9.375-24.56 0-33.94L289.9 240l47.03-47.03c9.375-9.375 9.375-24.56 0-33.94s-24.56-9.375-33.94 0l-47.03 47.03L208.1 159c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L222.1 240L175 287C165.7 296.4 165.7 311.6 175 320.1z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M256 31.1c-141.4 0-255.1 93.13-255.1 208c0 49.63 21.35 94.98 56.97 130.7C44.5 421.1 2.729 465.1 2.229 466.5c-2.25 2.25-2.875 5.734-1.5 8.734C1.978 478.2 4.75 479.1 8 479.1c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-208S397.4 31.1 256 31.1zM336.1 287c9.375 9.375 9.375 24.56 0 33.94c-9.381 9.379-24.56 9.371-33.94 0l-47.03-47.03l-47.03 47.03c-9.381 9.379-24.56 9.371-33.94 0c-9.375-9.375-9.375-24.56 0-33.94L222.1 240L175 192.1c-9.375-9.375-9.375-24.56 0-33.94s24.56-9.375 33.94 0l47.03 47.03l47.03-47.03c9.375-9.375 24.56-9.375 33.94 0s9.375 24.56 0 33.94L289.9 240L336.1 287z"
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Chats</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $total_chats }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fa-duotone"
                                                data-icon="comments" class="svg-inline--fa fa-comments fa-w-20"
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <g class="fa-group">
                                                    <path class="fa-primary"
                                                        d="M637.9 499c2.1 2.205 2.67 5.475 1.441 8.354C638.1 510.3 635.4 512 632.3 512c-36.25 0-67.1-9.98-91.49-21.98C513.3 503.1 481.7 512 448 512c-90.01 0-165.3-56.86-186.1-133.5C368.3 357.2 448 274.6 448 176c0-5.387-.4668-10.67-.9336-15.96C447.4 160 447.7 160 448 160c106 0 192 78.8 192 176c0 40.63-15.17 77.95-40.41 107.7C615.9 475.3 637.6 498.7 637.9 499z"
                                                        fill="currentColor" />
                                                    <path class="fa-secondary"
                                                        d="M208 0C93.13 0 0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352c114.9 0 208-78.8 208-176C416 78.8 322.9 0 208 0z"
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
