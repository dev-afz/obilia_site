@pushOnce('component-styles')
    <style>
        .skeleton .square {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            background: rgba(130, 130, 130, 0.2);
            background: -webkit-gradient(linear, left top, right top, color-stop(8%, rgba(130, 130, 130, 0.2)), color-stop(18%, rgba(130, 130, 130, 0.3)), color-stop(33%, rgba(130, 130, 130, 0.2)));
            background: linear-gradient(to right, rgba(130, 130, 130, 0.2) 8%, rgba(130, 130, 130, 0.3) 18%, rgba(130, 130, 130, 0.2) 33%);
            background-size: 800px 100px;
            animation: wave-squares 1s infinite ease-out;
        }

        .skeleton .line {
            height: 12px;
            margin-bottom: 6px;
            border-radius: 2px;
            background: rgba(130, 130, 130, 0.2);
            background: -webkit-gradient(linear, left top, right top, color-stop(8%, rgba(130, 130, 130, 0.2)), color-stop(18%, rgba(130, 130, 130, 0.3)), color-stop(33%, rgba(130, 130, 130, 0.2)));
            background: linear-gradient(to right, rgba(130, 130, 130, 0.2) 8%, rgba(130, 130, 130, 0.3) 18%, rgba(130, 130, 130, 0.2) 33%);
            background-size: 800px 100px;
            animation: wave-lines 1s infinite ease-out;
        }

        .skeleton-right {
            flex: 1;
        }

        .skeleton-left {
            flex: 2;
            padding-right: 15px;
        }

        .flex1 {
            flex: 1;
        }

        .flex2 {
            flex: 2;
        }

        .skeleton .line:last-child {
            margin-bottom: 0;
        }

        .h8 {
            height: 8px !important;
        }

        .h10 {
            height: 10px !important;
        }

        .h12 {
            height: 12px !important;
        }

        .h15 {
            height: 15px !important;
        }

        .h17 {
            height: 17px !important;
        }

        .h20 {
            height: 20px !important;
        }

        .h25 {
            height: 25px !important;
        }

        .h30 {
            height: 30px !important;
        }

        .w125 {
            min-width: 125px !important;
        }

        .w150 {
            min-width: 150px !important;
        }

        .w175 {
            min-width: 175px !important;
        }

        .w200 {
            min-width: 200px !important;
        }

        .m10 {
            margin-bottom: 10px !important;
        }

        .circle {
            border-radius: 50% !important;
            height: 80px !important;
            width: 80px;
        }

        @keyframes wave-lines {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }

        @keyframes wave-squares {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }
    </style>
@endpushOnce

@for ($i = 0; $i < $count; $i++)
    <div class="{{ $class ?? 'col-lg-4 col-md-6' }}">
        <div class="twm-jobs-grid-style1 d-flex flex-column justify-content-between skeleton  m-b30">
            <div class="twm-media">
                <div class="square"></div>
            </div>

            <div class="twm-jobs-category green">
                <div class="line w125 h25 w-50"></div>
            </div>
            <div class="twm-mid-content">
                <span class="twm-job-post-duration  m-0">
                    <div class="line w125 w-25 h10"></div>
                </span>
                <div class="mt-2">
                    <a href="j#" class="twm-job-title mt-2">
                        <h4 class="">
                            <div class="line w125 h30"></div>
                        </h4>
                    </a>
                </div>
                <p class="twm-job-address ">
                <div class="line w125 h20"></div>
                <div class="line w125 h20 w-90"></div>
                <div class="line w125 h20 w-75"></div>
                </p>

            </div>
            <div class="twm-right-content">

                <div class="twm-jobs-amount ">
                    <div class="line w125 h30"></div>
                </div>
                <a href="#" class="twm-jobs-browse  ">
                    <div class="line w125 h30"></div>
                </a>
            </div>
        </div>
    </div>
@endfor
