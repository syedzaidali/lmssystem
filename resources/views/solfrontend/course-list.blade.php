@extends('layouts.solmaster')

@section('sol-content')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Courses</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->
    <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="instructor_search_result style2">
                                <p class="mt10 fz15"><span class="color-dark pr10">85 </span> results <span
                                        class="color-dark pr10">1,236</span> Video Tutorials</p>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="candidate_revew_select style2 text-right mb25">
                                <ul>
                                    <li class="list-inline-item">
                                        <select class="selectpicker show-tick">
                                            <option>My Courses</option>
                                            <option>Academy Courses</option>
                                        </select>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course mb30 fn-520">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input class="form-control mr-sm-2" type="search"
                                                    placeholder="Search our instructors" aria-label="Search">
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        @foreach ($responseBody as $res)
                            <div class="col-lg-6 col-xl-4">


                                <div class="top_courses">

                                    

                                    <a href="{{ url('sol/course-details/'.$res->course_id) }}">
                                        <div class="thumb">
                                            <img class="img-whp" src="{{ $res->image }}" alt="t1.jpg">
                                            <div class="overlay">
                                                <div class="icon"><img src="{{ $res->image }}" height="20%" width="20%">
                                                </div>
                                                {{-- <a class="tc_preview_course" href="#">Preview Course</a> --}}
                                            </div>
                                        </div>
                                    </a>
                                    <div class="details">


                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>{{ $res->name }}</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                        {{-- <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t2.jpg')}}" alt="t2.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Designing a Responsive Mobile Website with Muse</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t3.jpg')}}" alt="t3.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t4.jpg')}}" alt="t4.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Sketch: Creating Responsive SVG</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t5.jpg')}}" alt="t5.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Design Instruments for Communication</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t6.jpg')}}" alt="t6.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>How to be a DJ? Make Electronic Music</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t7.jpg')}}" alt="t7.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>How to Make Beautiful Landscape Photos?</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t8.jpg')}}" alt="t8.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Fashion Photography From Professional</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t13.jpg')}}" alt="t13.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Designing a Responsive Mobile Website with Muse</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t1.jpg')}}" alt="t1.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Introduction Web Design with HTML</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t2.jpg')}}" alt="t2.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Designing a Responsive Mobile Website with Muse</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{asset('sol-assets/images/courses/t3.jpg')}}" alt="t3.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        <div class="col-lg-12">
                            <div class="mbp_pagination">
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
                                            data-toggle="collapse" data-parent="#accordion">Software</a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">Photoshop <span
                                                        class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">Adobe Illustrator
                                                    <span class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                <label class="custom-control-label" for="customCheck16">Graphic Design <span
                                                        class="float-right">(126)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                <label class="custom-control-label" for="customCheck17">Sketch <span
                                                        class="float-right">(1,584)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                <label class="custom-control-label" for="customCheck18">InDesign <span
                                                        class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                <label class="custom-control-label" for="customCheck19">CorelDRAW <span
                                                        class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                <label class="custom-control-label" for="customCheck20">After Effects <span
                                                        class="float-right">(06)</span></label>
                                            </div>
                                            <a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See
                                                More</a>
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck0">
                                                    <label class="custom-control-label" for="customCheck0">Chris Convrse
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
                                        <div class="ui_kit_whitchbox">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Paid </label>
                                            </div>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">Free</label>
                                            </div>
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
                                        <a href="#panelBodySkills" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Skill level</a>
                                    </h4>
                                </div>
                                <div id="panelBodySkills" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck99">
                                                <label class="custom-control-label" for="customCheck99">Beginner <span
                                                        class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck98">
                                                <label class="custom-control-label" for="customCheck98">Intermediate <span
                                                        class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck97">
                                                <label class="custom-control-label" for="customCheck97">Advanced <span
                                                        class="float-right">(126)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck96">
                                                <label class="custom-control-label" for="customCheck96">Appropriate for all
                                                    <span class="float-right">(1,584)</span></label>
                                            </div>
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
                                        <a href="#panelBodyRating" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Rating</a>
                                    </h4>
                                </div>
                                <div id="panelBodyRating" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox style2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck80">
                                                <label class="custom-control-label" for="customCheck80">Show All <span
                                                        class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck82">
                                                <label class="custom-control-label" for="customCheck82">1 star and higher
                                                    <span class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck83">
                                                <label class="custom-control-label" for="customCheck83">2 star and higher
                                                    <span class="float-right">(126)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck84">
                                                <label class="custom-control-label" for="customCheck84">3 star and higher
                                                    <span class="float-right">(1,584)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck85">
                                                <label class="custom-control-label" for="customCheck85">4 star and higher
                                                    <span class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck86">
                                                <label class="custom-control-label" for="customCheck86">5 star and higher
                                                    <span class="float-right">(58)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="selected_filter_widget style2">
                        <span class="float-left"><img class="mr20" src="{{ asset('sol-assets/images/resource/2.png') }}"
                                alt="2.png"></span>
                        <h4 class="mt15 fz20 fw500">Not sure?</h4>
                        <br>
                        <p>Every course comes with a 30-day money-back guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
