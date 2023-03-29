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
    <style>

    </style>
    <link rel="stylesheet" href="{{ asset(mix('css/bs-override.css')) }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">

    {{--
    <link rel="stylesheet" href="{{ asset(mix('css/bootstrap.min.css')) }}" /> --}}
    <link rel="stylesheet" href="{{ asset(mix('css/font-awesome.min.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/feather.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/bootstrap-select.min.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/style.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/notiflix.min.css')) }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.9/dist/cookieconsent.css"
        media="print" onload="this.media='all'">

    {!! $styles ?? '' !!}
    @stack('component-styles')


</head>

<body class="theme_obillia" data-anm=".anm">

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
        @if ($newHeader)
            <x-new-header />
        @else
            <x-header />
        @endif

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

    <script src="{{ asset(mix('js/popper.min.js')) }}"></script>
    {{-- <script src="{{ asset(mix('js/bootstrap.min.js')) }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <script src="{{ asset(mix('js/bootstrap-select.min.js')) }}"></script>
    <script src="{{ asset(mix('js/waypoints.min.js')) }}"></script>
    <script src="{{ asset(mix('js/counterup.min.js')) }}"></script>
    <script src="{{ asset(mix('js/custom.js')) }}"></script>
    <script src="{{ asset(mix('js/anm.js')) }}"></script>
    <script src="{{ asset(mix('js/notiflix.min.js')) }}"></script>
    <script src="{{ asset(mix('js/init.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.9/dist/cookieconsent.js"></script>


    <script>
        var cookieconsent = initCookieConsent();

        // cookieconsent.run({
        //     current_lang: 'en',
        //     autoclear_cookies: true, // default: false
        //     page_scripts: true, // default: false
        //     remove_cookie_tables: true,
        //     cookie_name: 'ob_cookie_consent',
        //     revision: 1,
        //     onFirstAction: function(user_preferences, cookie) {
        //         // callback triggered o once
        //     },

        //     onAccept: function(cookie) {
        //         // ...
        //     },

        //     onChange: function(cookie, changed_preferences) {
        //         // ...
        //     },

        //     languages: {
        //         'en': {
        //             consent_modal: {
        //                 title: 'We use cookies!',
        //                 description: 'Hi, this website uses essential cookies to ensure its proper operation and tracking cookies to understand how you interact with it. The latter will be set only after consent. <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
        //                 primary_btn: {
        //                     text: 'Accept all',
        //                     role: 'accept_all' // 'accept_selected' or 'accept_all'
        //                 },
        //                 secondary_btn: {
        //                     text: 'Reject all',
        //                     role: 'accept_necessary' // 'settings' or 'accept_necessary'
        //                 },

        //             },
        //             settings_modal: {
        //                 title: 'Cookie preferences',
        //                 save_settings_btn: 'Save settings',
        //                 accept_all_btn: 'Accept all',
        //                 reject_all_btn: 'Reject all',
        //                 close_btn_label: 'Close',
        //                 cookie_table_headers: [{
        //                         col1: 'Name'
        //                     },
        //                     {
        //                         col2: 'Domain'
        //                     },
        //                     {
        //                         col3: 'Expiration'
        //                     },
        //                     {
        //                         col4: 'Description'
        //                     }
        //                 ],
        //                 blocks: [{
        //                     title: 'Cookie usage 📢',
        //                     description: 'I use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href="#" class="cc-link">privacy policy</a>.'
        //                 }, {
        //                     title: 'Strictly necessary cookies',
        //                     description: 'These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly',
        //                     toggle: {
        //                         value: 'necessary',
        //                         enabled: true,
        //                         readonly: true // cookie categories with readonly=true are all treated as "necessary cookies"
        //                     }
        //                 }, {
        //                     title: 'Performance and Analytics cookies',
        //                     description: 'These cookies allow the website to remember the choices you have made in the past',
        //                     toggle: {
        //                         value: 'analytics', // your cookie category
        //                         enabled: false,
        //                         readonly: false
        //                     },
        //                     cookie_table: [ // list of all expected cookies
        //                         {
        //                             col1: '^_ga', // match all cookies starting with "_ga"
        //                             col2: 'google.com',
        //                             col3: '2 years',
        //                             col4: 'description ...',
        //                             is_regex: true
        //                         },
        //                         {
        //                             col1: '_gid',
        //                             col2: 'google.com',
        //                             col3: '1 day',
        //                             col4: 'description ...',
        //                         }
        //                     ]
        //                 }, {
        //                     title: 'Advertisement and Targeting cookies',
        //                     description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you',
        //                     toggle: {
        //                         value: 'targeting',
        //                         enabled: false,
        //                         readonly: false
        //                     }
        //                 }, {
        //                     title: 'More information',
        //                     description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="#yourcontactpage">contact us</a>.',
        //                 }]
        //             }
        //         }
        //     },
        //     gui_options: {
        //         consent_modal: {
        //             layout: 'cloud', // box/cloud/bar
        //             position: 'bottom center', // bottom/middle/top + left/right/center
        //             transition: 'slide', // zoom/slide
        //             swap_buttons: false // enable to invert buttons
        //         },
        //         settings_modal: {
        //             layout: 'box', // box/bar
        //             // position: 'left',           // left/right
        //             transition: 'slide' // zoom/slide
        //         }
        //     }
        // })
    </script>

    {!! $vendor_scripts ?? '' !!}


    {!! $scripts ?? '' !!}

    @stack('component-scripts')



    @stack('component-lower-scripts')

</body>

</html>
