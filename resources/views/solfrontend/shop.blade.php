@extends('layouts.solmaster')

@section('sol-content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Shop</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Members -->
<section class="our-team pb50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="instructor_search_result">
                            <p class="mt10 fz15"><span class="color-dark pr10">15 results</span> Showing 1–9 of</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="candidate_revew_select text-right tac-xsd mb25">
                            <ul>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>Newly published</option>
                                        <option>Recent</option>
                                        <option>Old Review</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="{{asset('sol-assets/images/shop/5.png')}}" alt="5.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="price">$69.95</h4>
                                <h4 class="item-tile">Your Career</h4>
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="{{asset('sol-assets/images/shop/6.png')}}" alt="6.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="price">$69.95</h4>
                                <h4 class="item-tile">Learn English</h4>
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-sm-6 col-lg-6 col-xl-4">
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
                    <div class="col-lg-12">
                        <div class="mbp_pagination mt20">
                            <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                            class="flaticon-left-arrow"></span> Prev</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">14</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="selected_filter_widget style2 mb30">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyfilter" class="accordion-toggle link fz20 mb15"
                                        data-toggle="collapse" data-parent="#accordion">Selected Filters</a>
                                </h4>
                            </div>
                            <div id="panelBodyfilter" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="tags-bar style2">
                                        <span>Photoshop<i class="close-tag">x</i></span>
                                        <span>Sketch<i class="close-tag">x</i></span>
                                        <span>Beginner<i class="close-tag">x</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2 mb30">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                        data-toggle="collapse" data-parent="#accordion">Categories</a>
                                </h4>
                            </div>
                            <div id="panelBodySoftware" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="category_sidebar_widget">
                                        <ul class="category_list">
                                            <li><a href="#">Photoshop <span class="float-right">(03)</span></a></li>
                                            <li><a href="#">Adobe Illustrator <span class="float-right">(15)</span></a>
                                            </li>
                                            <li><a href="#">Graphic Design <span class="float-right">(126)</span></a>
                                            </li>
                                            <li><a href="#">Sketch <span class="float-right">(1,584)</span></a></li>
                                            <li><a href="#">InDesign <span class="float-right">(34)</span></a></li>
                                            <li><a href="#">CorelDRAW <span class="float-right">(58)</span></a></li>
                                            <li><a href="#">After Effects <span class="float-right">(06)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2 mb30">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyPrice" class="accordion-toggle link fz20 mb15"
                                        data-toggle="collapse" data-parent="#accordion">Price</a>
                                </h4>
                            </div>
                            <div id="panelBodyPrice" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="cl_pricing_slider">
                                        <div id="slider-range"></div>
                                        <p class="text-center">
                                            <input class="sl_input" type="text" id="amount">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15"
                                        data-toggle="collapse" data-parent="#accordion">Author</a>
                                </h4>
                            </div>
                            <div id="panelBodyAuthors" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="cl_skill_checkbox">
                                        <div class="content ui_kit_checkbox style2 text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck80">
                                                <label class="custom-control-label" for="customCheck80">Chris Convrse
                                                    <span class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Morten Rand <span
                                                        class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Rayi Villalobos
                                                    <span class="float-right">(125)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">James William
                                                    <span class="float-right">(1.584)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Jen Kramery <span
                                                        class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Chris Notder
                                                    <span class="float-right">(58)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Kramery Chris
                                                    <span class="float-right">(06)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">James William
                                                    <span class="float-right">(62)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">Chris Notder
                                                    <span class="float-right">(43)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">Rayi Villalobos
                                                    <span class="float-right">(23)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">Kramery Chris
                                                    <span class="float-right">(57)</span></label>
                                            </div>
                                        </div>
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
@endsection