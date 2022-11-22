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
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

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

        @guest
            <x-auth />
        @endguest
    </div>
    @vite([
        'resources/js/jquery-3.6.0.min.js',
        'resources/js/popper.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/bootstrap-select.min.js',
        'resources/js/waypoints.min.js',
        'resources/js/counterup.min.js',
        'resources/js/custom.js',
        'resources/js/anm.js',
        'resources/js/notiflix.min.js',
        //---
    ]);

    <script defer src="{{ asset('js/init.js') }}"></script>r


    {!! $scripts ?? '' !!}

    @stack('component-scripts')



</body>

</html>
