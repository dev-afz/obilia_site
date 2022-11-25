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
        'resources/css/scrollbar.css',
        'resources/css/notiflix.min.css',
        'resources/css/override.scss',
        'resources/css/bootstrap-extended.scss',
        //++
    ])
    {!! $styles ?? '' !!}
    @livewireStyles()
    @stack('component-styles')

</head>

<body>

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
        <x-dashboard.header />
        <x-dashboard.navbar />

        <div class="page-content">

            {!! $slot !!}

        </div>
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite([
        // 'resources/js/jquery-3.6.0.min.js',
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"></script>r
    @livewireScripts()

    {!! $scripts ?? '' !!}

    @stack('component-scripts')



</body>

</html>
