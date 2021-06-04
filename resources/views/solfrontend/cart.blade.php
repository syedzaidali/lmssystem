@extends('layouts.solmaster')

@section('sol-content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Cart</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Checkouts Content -->
<section class="shop-checkouts">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="cart_page_form">
                    <form action="#">
                        <table class="table table-responsive">
                            <thead>
                                <tr class="carttable_row">
                                    <th class="cartm_title">Product</th>
                                    <th class="cartm_title">Price</th>
                                    <th class="cartm_title">Quantity</th>
                                    <th class="cartm_title">Total</th>
                                </tr>
                            </thead>
                            <tbody class="table_body">
                                <tr>
                                    <th scope="row">
                                        <ul class="cart_list">
                                            <li class="list-inline-item pr15"><a href="#"><img
                                                        src="{{asset('sol-assets/images/shop/close.png')}}" alt="close.png"></a></li>
                                            <li class="list-inline-item pr20"><a href="#"><img
                                                        src="{{asset('sol-assets/images/shop/cart1.png')}}" alt="cart1.png"></a></li>
                                            <li class="list-inline-item"><a class="cart_title" href="#">Introduction Web
                                                    Design <br> with HTML</a></li>
                                        </ul>
                                    </th>
                                    <td>$99.00</td>
                                    <td><input class="cart_count text-center" placeholder="4" type="number"></td>
                                    <td class="cart_total">$499.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul class="cart_list">
                                            <li class="list-inline-item pr15"><a href="#"><img
                                                        src="{{asset('sol-assets/images/shop/close.png')}}" alt="close.png"></a></li>
                                            <li class="list-inline-item pr20"><a href="#"><img
                                                        src="{{asset('sol-assets/images/shop/cart2.png')}}" alt="cart2.png"></a></li>
                                            <li class="list-inline-item"><a class="cart_title" href="#">Designing a
                                                    Responsive <br> Mobile Website with Muse</a></li>
                                        </ul>
                                    </th>
                                    <td>$99.00</td>
                                    <td><input class="cart_count text-center" placeholder="4" type="number"></td>
                                    <td class="cart_total">$499.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul class="cart_list">
                                            <li class="list-inline-item pr15"><a href="#"><img
                                                        src="{{asset('sol-assets/images/shop/close.png')}}" alt="close.png"></a></li>
                                            <li class="list-inline-item pr20"><a href="#"><img
                                                        src="{{asset('sol-assets/images/shop/cart3.png')}}" alt="cart3.png"></a></li>
                                            <li class="list-inline-item"><a class="cart_title" href="#">Seo Book</a>
                                            </li>
                                        </ul>
                                    </th>
                                    <td>$99.00</td>
                                    <td><input class="cart_count text-center" placeholder="4" type="number"></td>
                                    <td class="cart_total">$499.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="checkout_form">
                    <div class="checkout_coupon ui_kit_button">
                        <form class="form-inline">
                            <input class="form-control" type="search" placeholder="Coupon Code" aria-label="Search">
                            <button type="button" class="btn btn2">Apply Coupon</button>
                            <button type="button" class="btn btn3">Update Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="order_sidebar_widget mb30">
                    <h4 class="title">Cart Totals</h4>
                    <ul>
                        <li class="subtitle">
                            <p>Subtotal <span class="float-right">$2,590.00</span></p>
                        </li>
                        <li class="subtitle">
                            <p>Total <span class="float-right totals color-orose">$3,589.00</span></p>
                        </li>
                    </ul>
                </div>
                <div class="ui_kit_button payment_widget_btn">
                    <button type="button" class="btn dbxshad btn-lg btn-thm3 circle btn-block">Proceed To
                        Checkout</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection