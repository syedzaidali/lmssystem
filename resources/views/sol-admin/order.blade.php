@extends('layouts.soladmin')

@section('sol-content')

<div class="our-dashbord dashbord">
    <div class="dashboard_main_content">
        <div class="container-fluid">
            <div class="main_content_container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard_navigationbar dn db-1199">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard
                                    Navigation</button>
                                <ul id="myDropdown" class="dropdown-content">
                                    <li><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span>
                                            Dashboard</a></li>
                                    <li><a href="page-my-courses.html"><span class="flaticon-online-learning"></span> My
                                            Courses</a></li>
                                    <li class="active"><a href="page-my-order.html"><span
                                                class="flaticon-shopping-bag-1"></span> Order</a></li>
                                    <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span>
                                            Messages</a></li>
                                    <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a>
                                    </li>
                                    <li><a href="page-my-bookmarks.html"><span class="flaticon-like"></span>
                                            Bookmarks</a></li>
                                    <li><a href="page-my-listing.html"><span class="flaticon-add-contact"></span> Add
                                            listing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                            <h4 class="title float-left">Order</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12">
                        <div class="my_course_content_container">
                            <div class="my_setting_content">
                                <div class="my_setting_content_header">
                                    <div class="my_sch_title">
                                        <h4 class="m0">My Orders</h4>
                                    </div>
                                </div>
                                <div class="my_setting_content_details pb0">
                                    <div class="cart_page_form style2">
                                        <form action="#">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr class="carttable_row">
                                                        <th class="cartm_title">Item</th>
                                                        <th class="cartm_title">Date</th>
                                                        <th class="cartm_title">Status</th>
                                                        <th class="cartm_title">Total</th>
                                                        <th class="cartm_title">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                    <tr>
                                                        <th scope="row">
                                                            <ul class="cart_list">
                                                                <li class="list-inline-item pr20"><a href="#"><img
                                                                            src="{{asset('sol-assets/images/shop/cart1.png')}}"
                                                                            alt="cart1.png"></a></li>
                                                                <li class="list-inline-item"><a class="cart_title"
                                                                        href="#">Introduction Web Design with HTML</a>
                                                                </li>
                                                            </ul>
                                                        </th>
                                                        <td>01/03/2019</td>
                                                        <td>Completed</td>
                                                        <td class="cart_total">$259.00</td>
                                                        <td class="text-thm tdu">Receipt</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <ul class="cart_list">
                                                                <li class="list-inline-item pr20"><a href="#"><img
                                                                            src="{{asset('sol-assets/images/shop/cart2.png')}}"
                                                                            alt="cart2.png"></a></li>
                                                                <li class="list-inline-item"><a class="cart_title"
                                                                        href="#">Designing a Responsive Mobile Website
                                                                        with Muse</a></li>
                                                            </ul>
                                                        </th>
                                                        <td>01/03/2019</td>
                                                        <td>Completed</td>
                                                        <td class="cart_total">$259.00</td>
                                                        <td class="text-thm tdu">Receipt</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                <div class="my_setting_content_header pt0">
                                    <div class="my_sch_title">
                                        <h4 class="m0">Order Details</h4>
                                    </div>
                                </div>
                                <div class="my_setting_content_details">
                                    <ul class="order_key_status mb0">
                                        <li>Order key <span>ORDER5C78E5C9B55A1</span></li>
                                        <li>Order status <span>Completed</span></li>
                                    </ul>
                                </div>
                                <div class="my_setting_content_details">
                                    <div class="cart_page_form style3">
                                        <form action="#">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr class="carttable_row">
                                                        <th class="cartm_title">Item</th>
                                                        <th class="cartm_title">Ordered</th>
                                                        <th class="cartm_title">Coupon Code</th>
                                                        <th class="cartm_title">Quantity</th>
                                                        <th class="cartm_title">Price</th>
                                                        <th class="cartm_title">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table_body">
                                                    <tr>
                                                        <th scope="row">
                                                            <ul class="cart_list">
                                                                <li class="list-inline-item"><a class="cart_title"
                                                                        href="#">Introduction Web Design with HTML</a>
                                                                </li>
                                                            </ul>
                                                        </th>
                                                        <td>01/03/2019</td>
                                                        <td>SNUGGLE202</td>
                                                        <td>1</td>
                                                        <td class="cart_total">$259.00</td>
                                                        <td class="">$2,590.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <ul class="cart_list">
                                                                <li class="list-inline-item"><a class="cart_title"
                                                                        href="#">Designing a Responsive Mobile Website
                                                                        with Muse</a></li>
                                                            </ul>
                                                        </th>
                                                        <td>01/03/2019</td>
                                                        <td>SNUGGLE202</td>
                                                        <td>1</td>
                                                        <td class="cart_total">$259.00</td>
                                                        <td class="">$2,590.00</td>
                                                    </tr>
                                                    <tr class="borderless_table_row">
                                                        <th scope="row"></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="cart_total color-dark fz18 pb10">Total</td>
                                                        <td class="color-gray2 fz15 pb10">$2,590.00</td>
                                                    </tr>
                                                    <tr class="borderless_table_row style2">
                                                        <th scope="row"></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="cart_total color-dark fz18 pt10">Total Paid</td>
                                                        <td class="color-gray2 fz15 pt10">$3,590.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt50 pb50">
                    <div class="col-lg-12">
                        <div class="copyright-widget text-center">
                            <p class="color-black2">Copyright Solmax Group © 2021. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection