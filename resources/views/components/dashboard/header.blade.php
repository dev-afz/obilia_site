<header id="header-admin-wrap" class="header-admin-fixed">

    <!-- Header Start -->
    <div id="header-admin">
        <div class="container">

            <!-- Left Side Content -->
            <div class="header-left">
                <div class="nav-btn-wrap">
                    <a class="nav-btn-admin" id="sidebarCollapse">
                        <span class="fa fa-angle-left"></span>
                    </a>
                </div>
            </div>
            <!-- Left Side Content End -->

            <!-- Right Side Content -->
            <div class="header-right">
                <ul class="header-widget-wrap">

                    <!--Account-->
                    <li class="header-widget">
                        <div class="dashboard-user-section">
                            <div class="listing-user">
                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" id="ID-ACCOUNT_dropdown"
                                        data-bs-toggle="dropdown">
                                        <div class="user-name text-black">
                                            <span>
                                                <img src="/images/user-avtar/pic4.jpg" alt="">
                                            </span>{{ auth()->user()->name }}
                                        </div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ID-ACCOUNT_dropdown">

                                        <ul>
                                            <li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
                                            <li><a href="dash-#"><i class="fa fa-envelope"></i>
                                                    Messages</a></li>
                                            <li><a href="/{{ str_replace('_', '-', auth()->user()->role) }}/profile"><i
                                                        class="fa fa-user"></i>
                                                    Profile</a>
                                            </li>
                                            <li><a href="/logout"><i class="fa fa-share-square"></i> Logout</a>
                                            </li>
                                        </ul>


                                    </div>
                                </div>

                            </div>
                        </div>





                    </li>

                </ul>
            </div>
            <!-- Right Side Content End -->

        </div>
    </div>
    <!-- Header End -->

</header>
