<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/logo/logo.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/logo.ico') }}" />

    <!-- PAGE TITLE HERE -->
    <title>{{ config('app.name') }} |
        {{ $title ?? '' }}
    </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite([
        'resources/css/bootstrap.min.css',
        'resources/css/font-awesome.min.css',
        'resources/css/feather.css',
        'resources/css/bootstrap-select.min.css',
        'resources/css/style.scss',
        'resources/css/notiflix.min.css',
        //++
    ])
    {!! $styles ?? '' !!}
    @stack('component-styles')

</head>

<body data-anm=".anm">

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
        <x-header />

        <div class="page-content">

            {!! $slot !!}

        </div>

        <x-footer />

        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        <div class="search-modal" id="search">
            <span class="close"></span>
            <form role="search" id="searchform" action="{{ route('search') }}" method="get" class="radius-xl">
                <select required name="type" class="wt-search-bar-select selectpicker" data-live-search="false"
                    id="work__type">
                    <option selected value="work">Work</option>
                    <option value="talent">Talent</option>
                </select>
                <input required class="form-control" value="" name="q" type="search"
                    placeholder="Type to search" />
                <span class="input-group-append">
                    <button type="submit" class="search-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </form>
        </div>
        @guest
            <x-auth />
        @endguest
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite([
        'resources/js/popper.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/bootstrap-select.min.js',
        'resources/js/waypoints.min.js',
        'resources/js/counterup.min.js',
        'resources/js/custom.js',
        'resources/js/anm.js',
        'resources/js/notiflix.min.js',
        'resources/js/init.js',
        //---
    ]);

    {!! $scripts ?? '' !!}

    @stack('component-scripts')



</body>

</html>
