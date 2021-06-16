<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="CreativeLayers" content="ATFN">


    @yield('sol-style')
    <!-- css file -->

    <link rel="stylesheet" href="{{asset('sol-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('sol-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('sol-assets/css/dashbord_navitaion.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('sol-assets/css/responsive.css')}}">
    <!-- Title -->
    <title>Solmax Group</title>
    <!-- Favicon -->
    <link href="{{asset('sol-assets/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('sol-assets/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="{{asset('sol-assets/images/logos.png')}}" height="40px"
                            width="240px" alt="header-logos.png">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="#" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="{{asset('sol-assets/images/logos.png')}}" height="40px"
                            width="240px" alt="header-logos.png">

                        <img class="logo2 img-fluid" src="{{asset('sol-assets/images/logos.png')}}"
                            alt="header-logos.png" height="40px"
                            width="240px">
                        <!-- <span>edumy</span> -->
                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li>
                            <a href="#"><span class="title">Home</span></a>
                            <!-- Level Two-->
                            <ul>
                                <li><a href="{{route('sol-index')}}">Home 1</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="title">Courses</span></a>
                            <!-- Level Two-->
                            <ul>
                                <li>
                                    <a href="#">Courses List</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-course-v1.html">Courses v1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Courses Single</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-course-single-v1.html">Single V1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="title">Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#"><span class="title">Shop Pages</span></a>
                                    <ul>
                                        <li><a href="page-shop.html">Shop</a></li>
                                        <li><a href="page-shop-single.html">Shop Single</a></li>
                                        <li><a href="page-shop-cart.html">Cart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="title">User Admin</span></a>
                                    <ul>
                                        <li><a href="page-dashboard.html">Dashboard</a></li>
                                        <li><a href="page-my-courses.html">My Courses</a></li>
                                        <li><a href="page-my-order.html">My Order</a></li>
                                        <li><a href="page-my-message.html">My Message</a></li>
                                        <li><a href="page-my-review.html">My Review</a></li>
                                        <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                        <li><a href="page-my-listing.html">My Listing</a></li>
                                        <li><a href="page-my-setting.html">My Setting</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="last">
                            <a href="page-contact.html"><span class="title">Contact</span></a>
                        </li>
                    </ul>
                    <ul class="header_user_notif pull-right dn-smd">
                        <li class="user_notif">
                            <div class="dropdown">
                                <a class="notification_icon" href="#" data-toggle="dropdown"><span
                                        class="flaticon-email"></span></a>
                                <div class="dropdown-menu notification_dropdown_content">
                                    <div class="so_heading">
                                        <p>Notifications</p>
                                    </div>
                                    <div class="so_content" data-simplebar="init">
                                        <ul>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="view_all_noti text-thm" href="#">View all alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="user_notif">
                            <div class="dropdown">
                                <a class="notification_icon" href="#" data-toggle="dropdown"><span
                                        class="flaticon-alarm"></span></a>
                                <div class="dropdown-menu notification_dropdown_content">
                                    <div class="so_heading">
                                        <p>Notifications</p>
                                    </div>
                                    <div class="so_content" data-simplebar="init">
                                        <ul>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                            <li>
                                                <h5>Status Update</h5>
                                                <p>This is an automated server response message. All systems are online.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="view_all_noti text-thm" href="#">View all alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="user_setting">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img
                                        class="rounded-circle" src="{{asset('sol-assets/images/team/e1.png')}}"
                                        alt="e1.png"></a>
                                <div class="dropdown-menu">
                                    <div class="user_set_header">
                                        <img class="float-left" src="{{asset('sol-assets/images/team/e1.png')}}"
                                            alt="e1.png">
                                        <p>Kim Hunter <br><span class="address"><a
                                                    href="https://grandetest.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="4d26242025382339283f0d2a202c2421632e2220">[email&#160;protected]</a></span>
                                        </p>
                                    </div>
                                    <div class="user_setting_content">
                                        <a class="dropdown-item active" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">Messages</a>
                                        <a class="dropdown-item" href="#">Purchase history</a>
                                        <a class="dropdown-item" href="#">Help</a>
                                        <a class="dropdown-item" href="#">Log out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <ul class="header_user_notif dashbord_pages_mobile_version pull-right">
                    <li class="user_notif">
                        <div class="dropdown">
                            <a class="notification_icon" href="#" data-toggle="dropdown"><span
                                    class="flaticon-email"></span></a>
                            <div class="dropdown-menu notification_dropdown_content">
                                <div class="so_heading">
                                    <p>Notifications</p>
                                </div>
                                <div class="so_content" data-simplebar="init">
                                    <ul>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                    </ul>
                                </div>
                                <a class="view_all_noti text-thm" href="#">View all alerts</a>
                            </div>
                        </div>
                    </li>
                    <li class="user_notif">
                        <div class="dropdown">
                            <a class="notification_icon" href="#" data-toggle="dropdown"><span
                                    class="flaticon-alarm"></span></a>
                            <div class="dropdown-menu notification_dropdown_content">
                                <div class="so_heading">
                                    <p>Notifications</p>
                                </div>
                                <div class="so_content" data-simplebar="init">
                                    <ul>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                        <li>
                                            <h5>Status Update</h5>
                                            <p>This is an automated server response message. All systems are online.</p>
                                        </li>
                                    </ul>
                                </div>
                                <a class="view_all_noti text-thm" href="#">View all alerts</a>
                            </div>
                        </div>
                    </li>
                    <li class="user_setting">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle"
                                    src="{{asset('sol-assets/images/team/e1.png')}}" alt="e1.png"></a>
                            <div class="dropdown-menu">
                                <div class="user_set_header">
                                    <img class="float-left" src="{{asset('sol-assets/images/team/e1.png')}}"
                                        alt="e1.png">
                                    <p>Kim Hunter <br><span class="address"><a
                                                href="https://grandetest.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b4dfddd9dcc1dac0d1c6f4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></span>
                                    </p>
                                </div>
                                <div class="user_setting_content">
                                    <a class="dropdown-item active" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">Messages</a>
                                    <a class="dropdown-item" href="#">Purchase history</a>
                                    <a class="dropdown-item" href="#">Help</a>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
                    <div class="main_logo_home2">
                        <img class="nav_logo_img img-fluid float-left mt20"
                            src="{{asset('sol-assets/images/logos.png')}}" height="35px" width="210px"
                            alt="header-logos.png">

                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                        </ul>
                    </li>
                    <li><span>Courses</span>
                        <ul>
                            <li><span>Courses List</span>
                                <ul>
                                    <li><a href="page-course-v1.html">Courses </a></li>
                                </ul>
                            </li>
                            <li><span>Courses Detail</span>
                                <ul>
                                    <li><a href="page-course-single-v1.html">Single V1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><span>Shop</span>
                        <ul>
                            <li><span>Shop Pages</span>
                                <ul>
                                    <li><a href="page-shop.html">Shop</a></li>
                                    <li><a href="page-shop-single.html">Shop Single</a></li>
                                    <li><a href="page-shop-cart.html">Cart</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><span>User Admin</span>
                        <ul>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#"><span class="flaticon-user"></span> Login</a></li>
                    <li><a href="#"><span class="flaticon-edit"></span> Register</a></li>
                </ul>
            </nav>
        </div>

        <!-- Our Dashbord Sidebar -->
        @include('sol-admin.sidebar')


        <!-- Our Dashbord -->
        @yield('sol-content')






        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
    <!-- Wrapper End -->


    @yield('sol-script')

    <script type="text/javascript" src="{{asset('sol-assets/js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/popper.min.js')}}"></script>


    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js')}}">
    </script>
    <script src="{{asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('sol-assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery.mmenu.all.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/ace-responsive-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/chart-custome.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/snackbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/simplebar.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/scrollto.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery-scrolltofixed-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery.counterup.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/timepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/dashboard-script.js')}}"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('sol-assets/js/script.js')}}"></script>



    <!-- <script>
    $(function() {
        $('.dropdowm_menu').click(function() {
            // alert('succes');
            $('._menu').toggleClass('show');

        });

    });
    </script> -->


</body>

</html>
