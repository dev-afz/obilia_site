<header class="site-header header-style-3 no-fixed mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg ">
        <div class="main-bar">

            <div class="container-fluid clearfix">

                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="index.html">
                            <img src="images/logo-dark.png" alt="">
                        </a>
                    </div>
                </div>

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex flex-column align-items-center">
                    <div class="p-3 d-md-none">
                        <img class="d-md-none" width="50%" src="images/logo-dark.png" alt="">
                    </div>
                    <ul class=" nav navbar-nav">
                        <li class="has-child"><a href="javascript:;">Home</a></li>
                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        <div class="header-search">
                            <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                        </div>
                    </div>
                    <div class="extra-cell">
                        <div class="header-nav-btn-section">
                            <div class="twm-nav-btn-left">
                                <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                    <i class="feather-user-plus"></i> Sign Up
                                </a>
                            </div>
                            <div class="twm-nav-btn-right">
                                <a href="#login_popup" data-bs-toggle="modal" class="twm-nav-post-a-job">
                                    <i class="feather-log-in"></i> Login
                                </a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>


        </div>

        <!-- SITE Search -->
        <div id="search">
            <span class="close"></span>
            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                <input class="form-control" value="" name="q" type="search" placeholder="Type to search" />
                <span class="input-group-append">
                    <button type="button" class="search-btn">
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </span>
            </form>
        </div>
    </div>








</header>
<!-- HEADER END -->
