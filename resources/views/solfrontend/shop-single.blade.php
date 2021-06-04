@extends('layouts.solmaster')

@section('sol-content')



<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Shop sıngle</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop sıngle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Single Content -->
<section class="shop-single-content pb0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="single_product_grid">
                    <div class="single_product_slider">
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{asset('sol-assets/images/shop/ss1.png')}}" alt="ss1.png">
                                    </div>
                                </div>
                                <a class="product_popup popup-img" href="{{asset('sol-assets/images/shop/ss1.png')}}"><span
                                        class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{asset('sol-assets/images/shop/ss1.png')}}" alt="ss1.png">
                                    </div>
                                </div>
                                <a class="product_popup popup-img" href="{{asset('sol-assets/images/shop/ss1.png')}}"><span
                                        class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{asset('sol-assets/images/shop/ss1.png')}}" alt="ss1.png">
                                    </div>
                                </div>
                                <a class="product_popup popup-img" href="{{asset('sol-assets/images/shop/ss1.png')}}"><span
                                        class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{asset('sol-assets/images/shop/ss1.png')}}" alt="ss1.png">
                                    </div>
                                </div>
                                <a class="product_popup popup-img" href="{{asset('sol-assets/images/shop/ss1.png')}}"><span
                                        class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{asset('sol-assets/images/shop/ss1.png')}}" alt="ss1.png">
                                    </div>
                                </div>
                                <a class="product_popup popup-img" href="{{asset('sol-assets/images/shop/ss1.png')}}"><span
                                        class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="shop_single_product_details">
                    <h3 class="title">Building a Meaningful Future</h3>
                    <div class="sspd_review mb20">
                        <ul>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#">(6)</a></li>
                        </ul>
                    </div>
                    <p class="mb20">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                        egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                        libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                        leo.</p>
                    <div class="sspd_price mb25">$69.95</div>
                    <ul class="cart_btns ui_kit_button mb30">
                        <li class="list-inline-item"><input placeholder="4" type="number"></li>
                        <li class="list-inline-item"><button type="button" class="btn"><span
                                    class="flaticon-shopping-bag pr5 fz20"></span> Add To Cart</button></li>
                    </ul>
                    <ul class="sspd_sku mb30">
                        <li><a href="#">SKU: 10</a></li>
                        <li><a href="#">Category: Languages</a></li>
                        <li><a href="#">Tag: Personal Development</a></li>
                    </ul>
                    <ul class="sspd_social_icon">
                        <li class="list-inline-item">Share:</li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="shop_single_tab_content mt40">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                aria-controls="review" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="product_single_content">
                                <div class="mbp_pagination_comments">
                                    <div class="mbp_first media">
                                        <div class="media-body pb45">
                                            <h4 class="sub_title mt-0">Early childhood education</h4>
                                            <p class="mb25 mt10">Magna sit amet purus gravida quis blandit turpis.
                                                Porttitor rhoncus dolor purus non enim praesent. Vulputate enim nulla
                                                aliquet porttitor. Nec sagittis aliquam malesuada bibendum arcu vitae
                                                elementum curabitur vitae. Dictumst vestibulum rhoncus est pellentesque
                                                elit ullamcorper dignissim. Mattis pellentesque id nibh tortor id
                                                aliquet lectus. Non curabitur gravida arcu ac tortor dignissim convallis
                                                aenean.</p>
                                            <h4 class="sub_title mt-0">Take time now to plan for tomorrow.</h4>
                                            <p class="mt10">Elementum pulvinar etiam non quam lacus suspendisse faucibus
                                                interdum. Vitae suscipit tellus mauris a diam maecenas sed. Nunc
                                                scelerisque viverra mauris in aliquam sem fringilla ut morbi. Elementum
                                                nisi quis eleifend quam. Nisi porta lorem mollis aliquam ut porttitor
                                                leo a diam. Ultrices vitae auctor eu augue ut lectus arcu bibendum at.
                                                Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis
                                                feugiat vivamus. Nulla aliquet porttitor lacus luctus accumsan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="product_single_content">
                                <div class="mbp_pagination_comments">
                                    <div class="mbp_first media">
                                        <img src="{{asset('sol-assets/images/resource/review1.png')}}" class="mr-3" alt="review1.png">
                                        <div class="media-body">
                                            <h4 class="sub_title mt-0">Warren Bethell
                                                <span class="sspd_review float-right">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </h4>
                                            <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                            <p class="fz15 mt20">This is the second Photoshop course I have completed
                                                with Cristian. Worth every penny and recommend it highly. To get the
                                                most out of this course, its best to to take the Beginner to Advanced
                                                course first.</p>
                                            <p class="fz15 mt25 mb25">The sound and video quality is of a good standard.
                                                Thank you Cristian.</p>
                                            <div class="ssp_reply float-right"><span
                                                    class="flaticon-consulting-message"></span><span
                                                    class="pl10">Reply</span></div>
                                            <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i>
                                                    <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                            <div class="custom_hr style2"></div>
                                            <div class="mbp_sub media">
                                                <a href="#"><img src="{{asset('sol-assets/images/resource/review1.png')}}" class="mr-3"
                                                        alt="review1.png"></a>
                                                <div class="media-body">
                                                    <h4 class="sub_title mt-0">Anton Hilton
                                                        <span class="sspd_review float-right">
                                                            <ul>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"></li>
                                                            </ul>
                                                        </span>
                                                    </h4>
                                                    <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                                    <p class="fz15 mt20 mb50">This is the second Photoshop course I have
                                                        completed with Cristian. Worth every penny and recommend it
                                                        highly. To get the most out of this course, its best to to take
                                                        the</p>
                                                    <div class="ssp_reply float-right"><span
                                                            class="flaticon-consulting-message"></span><span
                                                            class="pl10">Reply</span></div>
                                                    <div class="sspd_review_liked">
                                                        <a href="#"><i class="flaticon-like-1"></i><span
                                                                class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom_hr"></div>
                                    <div class="mbp_second media">
                                        <img src="{{asset('sol-assets/images/resource/review1.png')}}" class="align-self-start mr-3"
                                            alt="review1.png">
                                        <div class="media-body">
                                            <h4 class="sub_title mt-0">Warren Bethell
                                                <span class="sspd_review float-right">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </h4>
                                            <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                            <p class="fz15 mt20">This is the second Photoshop course I have completed
                                                with Cristian. Worth every penny and recommend it highly. To get the
                                                most out of this course, its best to to take the Beginner to Advanced
                                                course first.</p>
                                            <p class="fz15 mt25 mb25">The sound and video quality is of a good standard.
                                                Thank you Cristian.</p>
                                            <div class="ssp_reply float-right"><span
                                                    class="flaticon-consulting-message"></span><span
                                                    class="pl10">Reply</span></div>
                                            <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i>
                                                    <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                        </div>
                                    </div>
                                    <div class="text-center mt50 mb70">
                                        <button type="button" class="more-review-btn btn">See more reviews</button>
                                    </div>
                                    <div class="mbp_comment_form style2">
                                        <h4>Add Reviews & Rate</h4>
                                        <ul>
                                            <li class="list-inline-item pr15">
                                                <p>What is it like to Course?</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="sspd_review">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </li>
                                        </ul>
                                        <form class="comments_form">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Review Title</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    aria-describedby="textHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Review Content</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="6"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-thm">Submit Review <span
                                                    class="flaticon-right-arrow-1"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Product -->
<section class="our-product pb20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h3 class="mb0 mt0">Related Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shop_product_slider">
                    <div class="item">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="{{asset('sol-assets/images/shop/1.png')}}" alt="1.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="price">$69.95</h4>
                                <h4 class="item-tile">SEO Tricks</h4>
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(6)</a></li>
                                </ul>
                            </div>
                            <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"></span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="{{asset('sol-assets/images/shop/2.png')}}" alt="2.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="price">$69.95</h4>
                                <h4 class="item-tile">Designing Your Life</h4>
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(6)</a></li>
                                </ul>
                            </div>
                            <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"></span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="{{asset('sol-assets/images/shop/3.png')}}" alt="3.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="price">$69.95</h4>
                                <h4 class="item-tile">Meaningful Future</h4>
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(6)</a></li>
                                </ul>
                            </div>
                            <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"></span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="{{asset('sol-assets/images/shop/4.png')}}" alt="4.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="price">$69.95</h4>
                                <h4 class="item-tile">Your Life in Christ</h4>
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(6)</a></li>
                                </ul>
                            </div>
                            <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection