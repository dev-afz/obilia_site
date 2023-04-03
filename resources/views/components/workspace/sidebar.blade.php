<aside class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0  p-0  pe-0">
    <div class=" ps-1 h-100 sticky-top">
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
            <li class="nav-item py-2 ps-4 my-3 d-none d-sm-block">
                <div class="workspace-title">
                    <h4 class="fs-5 text-center">
                        Workspace
                    </h4>
                </div>
            </li>
            <li @class([
                'nav-item py-2',
                'active' =>
                    Route::currentRouteName() ==
                    str_replace('_', '-', auth()->user()->role) . '.workspace.show',
            ])>
                <a href="{{ route(str_replace('_', '-', auth()->user()->role) . '.workspace.show', session('active_workspace')) }}"
                    class="nav-link ps-3 text-truncate gap-3 d-flex">
                    <div class="svg-holder">
                        <svg aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="border-all"
                            class="svg-inline--fa fa-border-all fa-w-14" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M384 32H64C28.8 32 0 60.8 0 96v320c0 35.2 28.8 64 64 64h320c35.2 0 64-28.8 64-64V96C448 60.8 419.2 32 384 32zM200 432H64c-8.836 0-16-7.164-16-16V280h152V432zM200 232H48V96c0-8.838 7.164-16 16-16h136V232zM400 416c0 8.836-7.164 16-16 16h-136V280h152V416zM400 232h-152V80H384c8.836 0 16 7.162 16 16V232z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <span class="d-none d-sm-block ws-break">Dashboard</span>
                </a>
            </li>
            <li @class([
                'nav-item py-2',
                'active' =>
                    Route::currentRouteName() ==
                    str_replace('_', '-', auth()->user()->role) . '.workspace.project-info',
            ])>
                <a href="{{ route(str_replace('_', '-', auth()->user()->role) . '.workspace.project-info', session('active_workspace')) }}"
                    class="nav-link ps-3 text-truncate gap-3 d-flex">
                    <div class="svg-holder">
                        <svg aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="chart-area"
                            class="svg-inline--fa fa-chart-area fa-w-16" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M120 384h336c13.25 0 24-10.75 24-24V240c0-5.531-1.906-10.91-5.438-15.19l-72-88c-4.281-5.25-10.59-8.438-17.38-8.781c-6.656-.5-13.38 2.219-18.16 7l-46.28 46.28L249.7 103.8C245.2 98.84 238.8 96.03 232.1 96C225.4 96 219 98.75 214.5 103.6l-112 120C98.31 228.1 96 233.9 96 240v120C96 373.3 106.8 384 120 384zM144 249.5l87.84-94.13l70.47 76.88C306.7 237 312.9 239.8 319.5 240c7.156 .0625 12.84-2.375 17.5-7.031l45.25-45.25L432 248.6V336h-288V249.5zM488 432H48V56C48 42.74 37.25 32 24 32S0 42.74 0 56V448c0 17.6 14.4 32 32 32h456c13.25 0 24-10.75 24-24C512 442.7 501.3 432 488 432z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <span class="d-none d-sm-block ws-break">Project Information</span>
                </a>
            </li>


            <li @class(['nav-item py-2'])>
                <a href="#" class="nav-link ps-3 text-truncate gap-3 d-flex">
                    <div class="svg-holder">
                        <svg aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="folder-blank"
                            class="svg-inline--fa fa-folder-blank fa-w-16" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M447.1 96h-172.1L226.7 50.75C214.7 38.74 198.5 32 181.5 32H63.1c-35.35 0-64 28.66-64 64v320c0 35.34 28.65 64 64 64h384c35.35 0 64-28.66 64-64V160C511.1 124.7 483.3 96 447.1 96zM463.1 416c0 8.824-7.178 16-16 16h-384c-8.822 0-16-7.176-16-16V96c0-8.824 7.178-16 16-16h117.5c4.273 0 8.293 1.664 11.31 4.688L255.1 144h192c8.822 0 16 7.176 16 16V416z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <span class="d-none d-sm-block ws-break">Files and Documents</span>
                </a>
            </li>
            <li @class(['nav-item py-2'])>
                <a href="#" class="nav-link ps-3 text-truncate gap-3 d-flex">
                    <div class="svg-holder">
                        <svg aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="circle-question"
                            class="svg-inline--fa fa-circle-question fa-w-16" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM256 336c-18 0-32 14-32 32s13.1 32 32 32c17.1 0 32-14 32-32S273.1 336 256 336zM289.1 128h-51.1C199 128 168 159 168 198c0 13 11 24 24 24s24-11 24-24C216 186 225.1 176 237.1 176h51.1C301.1 176 312 186 312 198c0 8-4 14.1-11 18.1L244 251C236 256 232 264 232 272V288c0 13 11 24 24 24S280 301 280 288V286l45.1-28c21-13 34-36 34-60C360 159 329 128 289.1 128z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <span class="d-none d-sm-block ws-break">Help</span>
                </a>
            </li>
            <li @class(['nav-item py-2'])>
                <a href="@if (auth()->user()->isProvider()) {{ route('service-provider.workspace.index') }}
                @else
                {{ route(str_replace('_', '-', auth()->user()->role) . '.workspace.index') }} @endif"
                    class="nav-link ps-3 text-truncate gap-3 d-flex">
                    <div class="svg-holder">
                        <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                            data-icon="arrow-right-from-bracket"
                            class="svg-inline--fa fa-arrow-right-from-bracket fa-w-16" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M192 456C192 469.3 181.3 480 168 480H96c-53.02 0-96-42.98-96-96V128c0-53.02 42.98-96 96-96h72C181.3 32 192 42.74 192 56C192 69.25 181.3 80 168 80H96C69.6 80 48 101.6 48 128v256c0 26.4 21.6 48 48 48h72C181.3 432 192 442.7 192 456zM505.5 239.6l-127.1-136c-9.094-9.688-24.28-10.12-33.91-1.031c-9.656 9.062-10.12 24.25-1.031 33.91L432.4 232H183.1C170.7 232 160 242.8 160 256s10.75 24 23.1 24h248.4l-89.92 95.56c-9.094 9.656-8.625 24.84 1.031 33.91C348.2 413.8 354.1 416 359.1 416c6.375 0 12.75-2.531 17.47-7.562l127.1-136C514.2 263.2 514.2 248.8 505.5 239.6z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <span class="d-none d-sm-block ws-break">Exit</span>
                </a>
            </li>


        </ul>
    </div>
</aside>
