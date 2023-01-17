<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obilia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(mix('css/style.css')) }}" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

        .svg-holder svg {
            width: 1.5em;
            height: 1.5em;
        }

        .ws-break {
            white-space: break-spaces;
        }

        header,
        aside {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        aside {
            max-width: 15rem !important;
            min-width: 15rem;
        }


        @media (max-width: 576px) {
            aside {
                max-width: 100% !important;
                min-width: 0;
                position: fixed;
                background: white;
                position: fixed;
                bottom: 0;
                padding-bottom: 2rem;
            }

            .container-fluid>.row {
                flex-direction: column-reverse !important;
            }
        }

        .timeline {
            position: relative;
            height: 100%;
            width: 100%;
            padding: 0;
            list-style: none
        }

        .timeline .timeline-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row
        }

        .timeline .timeline-header>*:first-child {
            margin-right: .5rem
        }

        .timeline .timeline-label {
            position: relative;
            z-index: 2;
            display: block;
            text-align: left;
            margin-left: -1.5rem;
            margin-bottom: 1rem
        }

        .timeline .timeline-item {
            position: relative;
            padding-left: 3rem
        }

        .timeline .timeline-item .timeline-event {
            position: relative;
            top: -1rem;
            width: 100%;
            min-height: 4rem;
            background-color: #fff;
            border-radius: .375rem;
            padding: 1.1rem 1.5rem .6rem
        }

        .timeline .timeline-item .timeline-event:before {
            position: absolute;
            top: .75rem;
            left: 32px;
            right: 100%;
            width: 0;
            height: 0;
            border-top: 1rem solid rgba(0, 0, 0, 0);
            border-right: 1rem solid;
            border-left: 0 solid;
            border-bottom: 1rem solid rgba(0, 0, 0, 0);
            border-left-color: #fff;
            border-right-color: #fff;
            margin-left: -3rem;
            content: ""
        }

        .timeline .timeline-item .timeline-event:after {
            position: absolute;
            top: .75rem;
            left: -17px;
            width: 0;
            height: 0;
            border-top: 1rem solid rgba(0, 0, 0, 0);
            border-right: 1rem solid;
            border-left: 0 solid;
            border-bottom: 1rem solid rgba(0, 0, 0, 0);
            border-left-color: #fff;
            border-right-color: #dbdade;
            z-index: -1;
            content: ""
        }

        .timeline .timeline-item .timeline-event.timeline-event-shadow {
            box-shadow: 0 .5rem 1rem rgba(75, 70, 92, .075) !important
        }

        .timeline .timeline-item .timeline-event .timeline-event-time {
            position: absolute;
            top: 1.2rem;
            font-size: .85rem;
            color: #a5a3ae
        }

        .timeline .timeline-item .timeline-indicator {
            position: absolute;
            left: -0.75rem;
            top: 0;
            z-index: 2;
            display: block;
            height: 1.5rem;
            width: 1.5rem;
            text-align: center;
            border-radius: 50%
        }

        .timeline .timeline-item .timeline-indicator i {
            background-color: #f8f7fa
        }

        .card .timeline .timeline-item .timeline-indicator i {
            background-color: #fff
        }

        .timeline .timeline-item .timeline-indicator i {
            color: #7367f0;
            font-size: 1.25rem;
            vertical-align: baseline
        }

        .timeline .timeline-item .timeline-point {
            position: absolute;
            left: -0.7rem;
            top: 0;
            z-index: 2;
            display: block;
            height: 1rem;
            width: 1rem;
            border-radius: 50%;
            border: 0;
            background-color: #7367f0
        }

        .timeline .timeline-item.timeline-item-transparent .timeline-event {
            top: -1.4rem;
            background-color: rgba(0, 0, 0, 0)
        }

        html:not([dir=rtl]) .timeline .timeline-item.timeline-item-transparent .timeline-event {
            padding-left: 0
        }

        .timeline .timeline-item.timeline-item-transparent .timeline-event.timeline-event-shadow {
            padding-left: 2rem
        }

        .timeline .timeline-item.timeline-item-transparent .timeline-event:before {
            display: none
        }

        .timeline.timeline-center:before {
            left: 50%
        }

        .timeline.timeline-center:after {
            left: 50%;
            margin-left: -0.55rem
        }

        .timeline.timeline-center .timeline-label {
            float: left;
            width: 100%;
            text-align: center;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            margin-left: auto;
            clear: left
        }

        .timeline.timeline-center .timeline-label+.timeline-item {
            margin-top: 2rem
        }

        .timeline.timeline-center .timeline-item {
            width: 50%;
            clear: both
        }

        .timeline.timeline-center .timeline-item.timeline-item-left,
        .timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) {
            float: left;
            padding-left: 0;
            padding-right: 3rem;
            border-left: 0;
            border-right: 1px solid #dbdade;
            left: 1px
        }

        .timeline.timeline-center .timeline-item.timeline-item-left .timeline-event .timeline-event-time,
        .timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-event .timeline-event-time {
            right: -9.5rem
        }

        .timeline.timeline-center .timeline-item.timeline-item-left .timeline-event:before,
        .timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-event:before {
            right: -15px;
            left: auto;
            border-left-width: 16px;
            border-right-width: 0
        }

        .timeline.timeline-center .timeline-item.timeline-item-left .timeline-point,
        .timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-point {
            left: 100%
        }

        .timeline.timeline-center .timeline-item.timeline-item-right,
        .timeline.timeline-center .timeline-item:nth-of-type(even):not(.timeline-item-left):not(.timeline-item-right) {
            float: right;
            border-left: 1px solid #dbdade
        }

        .timeline.timeline-center .timeline-item.timeline-item-right .timeline-event-time,
        .timeline.timeline-center .timeline-item:nth-of-type(even):not(.timeline-item-left):not(.timeline-item-right) .timeline-event-time {
            left: -9.5rem
        }

        .timeline.timeline-center .timeline-item.timeline-item-right .timeline-point,
        .timeline.timeline-center .timeline-item:nth-of-type(even):not(.timeline-item-left):not(.timeline-item-right) .timeline-point {
            left: 0
        }

        .timeline.timeline-center .timeline-item .timeline-point {
            left: 50%;
            margin-left: -0.6875rem
        }

        .timeline.timeline-center .timeline-item .timeline-point-indicator {
            left: 50%;
            margin-left: -0.3125rem
        }

        .timeline.timeline-advance .timeline-item .timeline-event:before,
        .timeline.timeline-advance .timeline-item .timeline-event:after {
            border: rgba(0, 0, 0, 0)
        }

        html:not([dir=rtl]) .timeline-item {
            border-left: 5px solid #dbdade
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-item {
            border-right: 1px solid #dbdade
        }

        [dir=rtl] .timeline:not(.timeline-center):before {
            right: -1px;
            left: auto
        }

        [dir=rtl] .timeline:not(.timeline-center):after {
            left: auto;
            margin-right: -0.65rem
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-label {
            text-align: right;
            margin-right: -1.5rem
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-item {
            padding-left: 0;
            padding-right: 3rem
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-event:before {
            right: -1rem;
            left: auto;
            border-left-width: 1rem;
            border-right-width: 0
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-item.timeline-item-transparent .timeline-event {
            padding-right: 0
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-point {
            right: -0.375rem;
            left: auto
        }

        [dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-indicator {
            right: -0.75rem;
            left: auto
        }

        @media(min-width: 768px) {

            .timeline.timeline-center .timeline-item.timeline-item-left .timeline-indicator,
            .timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-indicator {
                left: calc(100% - (1.5rem/ 2))
            }

            .timeline.timeline-center .timeline-item.timeline-item-left .timeline-event:after,
            .timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-event:after {
                transform: rotate(180deg);
                right: -16px;
                left: auto
            }
        }

        @media(max-width: 767.98px) {
            .timeline.timeline-center:before {
                left: 0
            }

            .timeline.timeline-center:after {
                left: 0
            }

            .timeline.timeline-center .timeline-label {
                text-align: left
            }

            .timeline.timeline-center .timeline-item {
                float: left !important;
                width: 100%;
                padding-left: 3rem !important;
                padding-right: 0 !important;
                border-right: 0 !important
            }

            .timeline.timeline-center .timeline-item:not(:last-child) {
                border-left: 1px solid #dbdade !important
            }

            .timeline.timeline-center .timeline-item .timeline-event:before {
                right: 100% !important;
                border-right-width: 1rem !important;
                border-left-width: 0 !important
            }

            .timeline.timeline-center .timeline-item .timeline-event .timeline-event-time {
                top: -1.7rem;
                left: 0 !important;
                right: auto !important
            }

            .timeline.timeline-center .timeline-item .timeline-point {
                left: -0.7rem !important;
                margin-left: 0 !important
            }

            .timeline.timeline-center .timeline-item .timeline-point-indicator {
                left: 0 !important;
                margin-left: -0.3125rem !important
            }

            [dir=rtl] .timeline.timeline-center:before {
                left: auto;
                right: 0
            }

            [dir=rtl] .timeline.timeline-center .timeline-item {
                border-left: 0 !important
            }

            [dir=rtl] .timeline.timeline-center .timeline-item:not(:last-child) {
                border-right: 1px solid #dbdade !important;
                right: 1px
            }

            [dir=rtl] .timeline.timeline-center:after {
                right: -0.55rem;
                left: auto
            }

            [dir=rtl] .timeline.timeline-center .timeline-label {
                text-align: right
            }

            [dir=rtl] .timeline.timeline-center .timeline-item {
                float: right !important;
                width: 100%;
                padding-right: 3rem !important;
                padding-left: 0 !important
            }

            [dir=rtl] .timeline.timeline-center .timeline-item .timeline-event:before {
                left: 100% !important;
                right: -1rem !important;
                border-left-width: 1rem !important;
                border-right-width: 0 !important
            }

            [dir=rtl] .timeline.timeline-center .timeline-item .timeline-event:after {
                transform: rotate(180deg);
                right: -17px;
                left: auto
            }

            [dir=rtl] .timeline.timeline-center .timeline-item .timeline-event .timeline-event-time {
                top: -1.2rem;
                right: 0 !important;
                left: auto !important
            }

            [dir=rtl] .timeline.timeline-center .timeline-item .timeline-point {
                right: -0.7rem !important;
                margin-right: 0 !important
            }

            [dir=rtl] .timeline.timeline-center .timeline-item .timeline-point-indicator {
                right: 0 !important;
                margin-right: -0.3125rem !important
            }
        }

        @media(max-width: 767.98px) {
            [dir=rtl] .timeline .timeline-item .timeline-indicator {
                left: auto;
                right: -0.75rem
            }
        }

        @media(max-width: 575.98px) {
            .timeline .timeline-header {
                flex-direction: column;
                align-items: flex-start
            }
        }

        .timeline .timeline-item-secondary .timeline-event {
            background-color: rgba(168, 170, 174, .1)
        }

        .timeline .timeline-item-secondary .timeline-event:before {
            border-left-color: rgba(168, 170, 174, .1) !important;
            border-right-color: rgba(168, 170, 174, .1) !important
        }

        .timeline .timeline-point-secondary {
            background-color: #a8aaae !important;
            box-shadow: 0 0 0 .1875rem rgba(168, 170, 174, .16)
        }

        .timeline .timeline-indicator-secondary i {
            color: #a8aaae !important
        }

        .timeline .timeline-item-success .timeline-event {
            background-color: rgba(40, 199, 111, .1)
        }

        .timeline .timeline-item-success .timeline-event:before {
            border-left-color: rgba(40, 199, 111, .1) !important;
            border-right-color: rgba(40, 199, 111, .1) !important
        }

        .timeline .timeline-point-success {
            background-color: #28c76f !important;
            box-shadow: 0 0 0 .1875rem rgba(40, 199, 111, .16)
        }

        .timeline .timeline-indicator-success i {
            color: #28c76f !important
        }

        .timeline .timeline-item-info .timeline-event {
            background-color: rgba(0, 207, 232, .1)
        }

        .timeline .timeline-item-info .timeline-event:before {
            border-left-color: rgba(0, 207, 232, .1) !important;
            border-right-color: rgba(0, 207, 232, .1) !important
        }

        .timeline .timeline-point-info {
            background-color: #00cfe8 !important;
            box-shadow: 0 0 0 .1875rem rgba(0, 207, 232, .16)
        }

        .timeline .timeline-indicator-info i {
            color: #00cfe8 !important
        }

        .timeline .timeline-item-warning .timeline-event {
            background-color: rgba(255, 159, 67, .1)
        }

        .timeline .timeline-item-warning .timeline-event:before {
            border-left-color: rgba(255, 159, 67, .1) !important;
            border-right-color: rgba(255, 159, 67, .1) !important
        }

        .timeline .timeline-point-warning {
            background-color: #ff9f43 !important;
            box-shadow: 0 0 0 .1875rem rgba(255, 159, 67, .16)
        }

        .timeline .timeline-indicator-warning i {
            color: #ff9f43 !important
        }

        .timeline .timeline-item-danger .timeline-event {
            background-color: rgba(234, 84, 85, .1)
        }

        .timeline .timeline-item-danger .timeline-event:before {
            border-left-color: rgba(234, 84, 85, .1) !important;
            border-right-color: rgba(234, 84, 85, .1) !important
        }

        .timeline .timeline-point-danger {
            background-color: #ea5455 !important;
            box-shadow: 0 0 0 .1875rem rgba(234, 84, 85, .16)
        }

        .timeline .timeline-indicator-danger i {
            color: #ea5455 !important
        }

        .timeline .timeline-item-dark .timeline-event {
            background-color: rgba(75, 75, 75, .1)
        }

        .timeline .timeline-item-dark .timeline-event:before {
            border-left-color: rgba(75, 75, 75, .1) !important;
            border-right-color: rgba(75, 75, 75, .1) !important
        }

        .timeline .timeline-point-dark {
            background-color: #4b4b4b !important;
            box-shadow: 0 0 0 .1875rem rgba(75, 75, 75, .16)
        }

        .timeline .timeline-indicator-dark i {
            color: #4b4b4b !important
        }

        .timeline .timeline-item-gray .timeline-event {
            background-color: rgba(75, 70, 92, .1)
        }

        .timeline .timeline-item-gray .timeline-event:before {
            border-left-color: rgba(75, 70, 92, .1) !important;
            border-right-color: rgba(75, 70, 92, .1) !important
        }

        .timeline .timeline-point-gray {
            background-color: rgba(75, 70, 92, .05) !important;
            box-shadow: 0 0 0 .1875rem rgba(75, 70, 92, .16)
        }

        .timeline .timeline-indicator-gray i {
            color: rgba(75, 70, 92, .05) !important
        }

        .card {
            background: #e6f1f3;
            /* box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; */
            border: none;
        }
    </style>

</head>

<body>


    <div style="min-height: 100vh"
        class="container-fluid  flex-grow-1 d-flex flex-column flex-sm-row overflow-auto p-0 m-0">
        <div class="row flex-grow-sm-1 flex-grow-0 w-100 p-0 m-0">
            <aside class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0  p-0  pe-0">
                <div class=" p-1 h-100 sticky-top">
                    <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
                        <li class="nav-item py-2 ps-4 my-3 d-none d-sm-block">
                            <div class="workspace-title">
                                <p class="fs-5">
                                    Workspace Name
                                </p>
                            </div>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
                                <div class="svg-holder">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="border-all" class="svg-inline--fa fa-border-all fa-w-14"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M384 32H64C28.8 32 0 60.8 0 96v320c0 35.2 28.8 64 64 64h320c35.2 0 64-28.8 64-64V96C448 60.8 419.2 32 384 32zM200 432H64c-8.836 0-16-7.164-16-16V280h152V432zM200 232H48V96c0-8.838 7.164-16 16-16h136V232zM400 416c0 8.836-7.164 16-16 16h-136V280h152V416zM400 232h-152V80H384c8.836 0 16 7.162 16 16V232z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="d-none d-sm-block ws-break">Summery</span>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
                                <div class="svg-holder">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="chart-area" class="svg-inline--fa fa-chart-area fa-w-16"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M120 384h336c13.25 0 24-10.75 24-24V240c0-5.531-1.906-10.91-5.438-15.19l-72-88c-4.281-5.25-10.59-8.438-17.38-8.781c-6.656-.5-13.38 2.219-18.16 7l-46.28 46.28L249.7 103.8C245.2 98.84 238.8 96.03 232.1 96C225.4 96 219 98.75 214.5 103.6l-112 120C98.31 228.1 96 233.9 96 240v120C96 373.3 106.8 384 120 384zM144 249.5l87.84-94.13l70.47 76.88C306.7 237 312.9 239.8 319.5 240c7.156 .0625 12.84-2.375 17.5-7.031l45.25-45.25L432 248.6V336h-288V249.5zM488 432H48V56C48 42.74 37.25 32 24 32S0 42.74 0 56V448c0 17.6 14.4 32 32 32h456c13.25 0 24-10.75 24-24C512 442.7 501.3 432 488 432z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="d-none d-sm-block ws-break">Milestone</span>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
                                <div class="svg-holder">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="wallet" class="svg-inline--fa fa-wallet fa-w-16" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M440 128h-320C106.8 128 96 138.8 96 152S106.8 176 120 176h320c13.23 0 24 10.77 24 24v208c0 13.23-10.77 24-24 24h-352c-22.06 0-40-17.94-40-40v-272c0-22.06 17.94-40 40-40h368C469.3 80 480 69.25 480 56S469.3 32 456 32H88C39.47 32 0 71.47 0 120v272C0 440.5 39.47 480 88 480h352c39.7 0 72-32.3 72-72v-208C512 160.3 479.7 128 440 128zM416 304c0-17.67-14.33-32-32-32s-32 14.33-32 32c0 17.67 14.33 32 32 32S416 321.7 416 304z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="d-none d-sm-block ws-break">Past & Coming Payment Details</span>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
                                <div class="svg-holder">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="receipt" class="svg-inline--fa fa-receipt fa-w-14" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M402 2.22c-8.5-3.953-18.53-2.547-25.66 3.578l-39.13 33.53l-32.28-32.28C296.5-1.42 283.1-2.342 273.6 4.814L224 42.01l-49.59-37.2C164.9-2.311 151.5-1.389 143 7.048L110.8 39.33L71.63 5.798c-7.109-6.125-17.17-7.531-25.66-3.578C37.45 6.126 32 14.64 32 24.02v463.1c0 9.374 5.453 17.89 13.97 21.8c8.484 3.937 18.55 2.531 25.66-3.578l39.13-33.53l32.28 32.28c8.438 8.468 21.81 9.359 31.38 2.234L224 469.1l49.59 37.2c9.562 7.156 22.92 6.265 31.38-2.234l32.28-32.28l39.13 33.53c4.438 3.812 10 5.781 15.62 5.781c3.406 0 6.828-.7187 10.03-2.203C410.5 505.9 416 497.4 416 487.1V24.02C416 14.64 410.5 6.126 402 2.22zM368 435.8l-16.38-14.03c-9.531-8.171-23.7-7.625-32.59 1.25l-33.28 33.28L238.4 420.8C234.1 417.6 229.1 415.1 224 415.1S213.9 417.6 209.6 420.8l-47.34 35.51l-33.28-33.28c-8.875-8.874-23.05-9.421-32.59-1.25L80 435.8V76.2L96.38 90.23c9.547 8.187 23.72 7.656 32.59-1.25l33.28-33.28l47.34 35.51c8.531 6.406 20.28 6.406 28.81 0l47.34-35.51l33.28 33.28c8.891 8.906 23.06 9.437 32.59 1.25L368 76.2V435.8zM312 160h-176c-8.844 0-16 7.156-16 15.1s7.156 15.1 16 15.1h176c8.844 0 16-7.156 16-15.1S320.8 160 312 160zM312 319.1h-176c-8.844 0-16 7.156-16 15.1c0 8.843 7.156 15.1 16 15.1h176c8.844 0 16-7.156 16-15.1C328 327.2 320.8 319.1 312 319.1zM312 240h-176c-8.844 0-16 7.156-16 15.1c0 8.843 7.156 15.1 16 15.1h176c8.844 0 16-7.156 16-15.1C328 247.2 320.8 240 312 240z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="d-none d-sm-block ws-break">All Invoice</span>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
                                <div class="svg-holder">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="folder-blank" class="svg-inline--fa fa-folder-blank fa-w-16"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M447.1 96h-172.1L226.7 50.75C214.7 38.74 198.5 32 181.5 32H63.1c-35.35 0-64 28.66-64 64v320c0 35.34 28.65 64 64 64h384c35.35 0 64-28.66 64-64V160C511.1 124.7 483.3 96 447.1 96zM463.1 416c0 8.824-7.178 16-16 16h-384c-8.822 0-16-7.176-16-16V96c0-8.824 7.178-16 16-16h117.5c4.273 0 8.293 1.664 11.31 4.688L255.1 144h192c8.822 0 16 7.176 16 16V416z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="d-none d-sm-block ws-break">Files & Documents</span>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
                                <div class="svg-holder">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                        data-icon="circle-question" class="svg-inline--fa fa-circle-question fa-w-16"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM256 336c-18 0-32 14-32 32s13.1 32 32 32c17.1 0 32-14 32-32S273.1 336 256 336zM289.1 128h-51.1C199 128 168 159 168 198c0 13 11 24 24 24s24-11 24-24C216 186 225.1 176 237.1 176h51.1C301.1 176 312 186 312 198c0 8-4 14.1-11 18.1L244 251C236 256 232 264 232 272V288c0 13 11 24 24 24S280 301 280 288V286l45.1-28c21-13 34-36 34-60C360 159 329 128 289.1 128z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="d-none d-sm-block ws-break">Help</span>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="#" class="nav-link px-2 text-truncate gap-3 d-flex">
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
            <main class="col overflow-auto h-100 p-0">
                <header class="py-3">
                    <div class="container-fluid align-items-center gap-3 d-flex">
                        <div class="flex-shrink-1">
                            <a href="#"
                                class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none">
                                <i class="bi bi-bootstrap fs-2 text-dark"></i>
                            </a>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-end">

                            <div class="flex-shrink-0 dropdown">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://via.placeholder.com/28?text=!" alt="user" width="32"
                                        height="32" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser2"
                                    style="">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <div class=" p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card p-5">
                                <ul class="timeline mb-0">
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header border-bottom mb-3">
                                                <h6 class="mb-0">Title</h6>
                                                <span class="text-muted">3rd October</span>
                                            </div>
                                            <div class="d-flex justify-content-between flex-wrap mb-2">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                                    quia
                                                    repellendus corrupti necessitatibus, consectetur.</p>
                                            </div>
                                            <button class="btn btn-success btn-sm">Btn</button>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header border-bottom mb-3">
                                                <h6 class="mb-0">Title</h6>
                                                <span class="text-muted">3rd October</span>
                                            </div>
                                            <div class="d-flex justify-content-between flex-wrap mb-2">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                                    quia
                                                    repellendus corrupti necessitatibus, consectetur.</p>
                                            </div>
                                            <button class="btn btn-success btn-sm">Btn</button>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header border-bottom mb-3">
                                                <h6 class="mb-0">Title</h6>
                                                <span class="text-muted">3rd October</span>
                                            </div>
                                            <div class="d-flex justify-content-between flex-wrap mb-2">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                                    quia
                                                    repellendus corrupti necessitatibus, consectetur.</p>
                                            </div>
                                            <button class="btn btn-success btn-sm">Btn</button>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>
