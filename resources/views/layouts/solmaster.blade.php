<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('sol-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('sol-assets/css/style.css')}}">
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
        <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="{{asset('sol-assets/images/logos.png')}}"
                            alt="header-logos.png">
                        <img class="logo2 img-fluid" src="{{asset('sol-assets/images/logos.png')}}"
                            alt="header-logos.png">

                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="#" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="{{asset('sol-assets/images/logos.png')}}" height="40px"
                            width="240px" alt="header-logos.png">
                        <img class="logo2 img-fluid" src="{{asset('sol-assets/images/logos.png')}}" height="40px"
                            width="240px" alt="header-logo2.png">
                        <!-- <span>SOLMAX GROUP</span> -->
                    </a>
                    <!-- Responsive Menu Structure-->

                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li>
                            <a href="{{route('sol-index')}}"><span class="title">Home</span></a>
                            <!-- Level Two-->

                        </li>
                        <li>
                            <a href="Courses"><span class="title">Courses</span></a>
                            <ul>
                                <li>
                                    <a href="#"><span class="title">Courses</span></a>
                                    <ul>
                                        <li><a href="{{route('sol-course-list')}}">Course List </a></li>
                                        <li><a href="{{route('sol-course-details')}}">Course Detail</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- Level Two-->

                        </li>
                        <li>

                            <a href="page-dashboard.html"><span class="title">Admin Dashboard</span></a>
                            <!-- Level Two-->

                        </li>
                        <li>
                            <a href="#"><span class="title">Shop Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#"><span class="title">Shop Pages</span></a>
                                    <ul>
                                        <li><a href="{{route('sol-shop')}}">Shop</a></li>
                                        <li><a href="{{route('sol-shop-single')}}">Shop Single</a></li>
                                        <li><a href="{{route('sol-shop-cart')}}">Cart</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="last">
                            <a href="{{route('sol-contact')}}"><span class="title">Contact</span></a>
                        </li>
                    </ul>
                    <ul class="sign_up_btn pull-right dn-smd mt20">
                        <li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal"
                                data-target="#exampleModalCenter"> <span class="dn-lg">Login/Register</span></a></li>
                        <li class="list-inline-item list_s">
                            <div class="cart_btn">
                                <ul class="cart">
                                    <li>
                                        <a href="#" class="btn cart_btn flaticon-shopping-bag"><span>5</span></a>
                                        <ul class="dropdown_content">
                                            <li class="list_content">
                                                <a href="#">
                                                    <img class="float-left" src="http://via.placeholder.com/50x50"
                                                        alt="50x50">
                                                    <p>Dolar Sit Amet</p>
                                                    <small>1 × $7.90</small>
                                                    <span class="close_icon float-right"><i
                                                            class="fa fa-plus"></i></span>
                                                </a>
                                            </li>
                                            <li class="list_content">
                                                <a href="#">
                                                    <img class="float-left" src="http://via.placeholder.com/50x50"
                                                        alt="50x50">
                                                    <p>Lorem Ipsum</p>
                                                    <small>1 × $7.90</small>
                                                    <span class="close_icon float-right"><i
                                                            class="fa fa-plus"></i></span>
                                                </a>
                                            </li>
                                            <li class="list_content">
                                                <a href="#">
                                                    <img class="float-left" src="http://via.placeholder.com/50x50"
                                                        alt="50x50">
                                                    <p>Is simply</p>
                                                    <small>1 × $7.90</small>
                                                    <span class="close_icon float-right"><i
                                                            class="fa fa-plus"></i></span>
                                                </a>
                                            </li>
                                            <li class="list_content">
                                                <h5>Subtotal: $57.70</h5>
                                                <a href="#" class="btn btn-thm cart_btns">View cart</a>
                                                <a href="#" class="btn btn-thm3 checkout_btns">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-inline-item list_s">
                            <div class="search_overlay">
                                <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                    <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                                </a>
                            </div>
                        </li>
                    </ul><!-- Button trigger modal -->
                </nav>
            </div>
        </header>
        <!-- Modal -->
        <!-- Modal -->
        <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="login_form">
                                <form action="#">
                                    <div class="heading">
                                        <h3 class="text-center">Login to your account</h3>
                                        <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign
                                                Up!</a></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                        <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                                    <hr>
                                    <div class="row mt40">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-fb"><i
                                                    class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-gogle"><i
                                                    class="fa fa-google float-left mt5"></i> Google</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h3 class="text-center">Create New Account</h3>
                                    <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                                </div>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail2"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword2"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword3"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                        <label class="custom-control-label" for="exampleCheck2">Want to become an
                                            instructor?</label>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                    <hr>
                                    <div class="row mt40">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-fb"><i
                                                    class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-gogle"><i
                                                    class="fa fa-google float-left mt5"></i> Google</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search Button Bacground Overlay -->
        <div class="search_overlay dn-992">
            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
                <div id="mk-fullscreen-search-wrapper">
                    <form method="get" id="mk-fullscreen-searchform">
                        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2">
                        <img class="nav_logo_img img-fluid float-left mt20" src="{{asset('sol-assets/images/logos.png')}}"
                            height="30px" width="180px" alt="header-logos.png">

                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item">
                            <div class="search_overlay">
                                <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger"
                                    href="#">
                                    <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                                </a>
                                <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i
                                            class="fa fa-times"></i></a>
                                    <div id="mk-fullscreen-search-wrapper2">
                                        <form method="get" id="mk-fullscreen-searchform2">
                                            <input type="text" value="" placeholder="Search courses..."
                                                id="mk-fullscreen-search-input2">
                                            <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                                    type="submit"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div
			><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                        </ul>
                    </li>
                    <li><span>Academy Courses</span>
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
                            <li><span>Ecomerce Courses</span>
                                <ul>
                                    <li><a href="page-course-list-ecom.html">Courses</a></li>
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
                </ul>
            </nav>
        </div>

        @yield('sol-content')


        <!-- Our Footer -->
        @include('solfrontend.sol-footer')

        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
    <!-- Wrapper End -->

    <script type="text/javascript" src="{{asset('sol-assets/js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery-migrate-3.0.0.min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/popper.min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery.mmenu.all.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/ace-responsive-menu.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/bootstrap-select.min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/isotop.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/snackbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/simplebar.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/parallax.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/scrollto.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery-scrolltofixed-min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/jquery.counterup.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/wow.min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/slider.js ')}}"></script>
    <script type="text/javascript" src="{{asset('sol-assets/js/timepicker.js ')}}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('sol-assets/js/script.js ')}}"></script>
</body>

</html>
