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
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard_navigationbar dn db-1199">
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i>
                                            Dashboard Navigation</button>
                                        <ul id="myDropdown" class="dropdown-content">
                                            <li><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span>
                                                    Dashboard</a></li>
                                            <li><a href="page-my-courses.html"><span
                                                        class="flaticon-online-learning"></span> My Courses</a></li>
                                            <li><a href="page-my-order.html"><span
                                                        class="flaticon-shopping-bag-1"></span> Order</a></li>
                                            <li class="active"><a href="page-my-message.html"><span
                                                        class="flaticon-speech-bubble"></span> Messages</a></li>
                                            <li><a href="page-my-review.html"><span class="flaticon-rating"></span>
                                                    Reviews</a></li>
                                            <li><a href="page-my-bookmarks.html"><span class="flaticon-like"></span>
                                                    Bookmarks</a></li>
                                            <li><a href="page-my-listing.html"><span
                                                        class="flaticon-add-contact"></span> Add listing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                                    <h4 class="title float-left">Messages</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="row message_container">
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 pr0 pl0">
                                <div class="inbox_user_list">
                                    <div class="iu_heading">
                                        <div class="candidate_revew_search_box">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Serach"
                                                    aria-label="Search">
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s1.jpg')}}" alt="s1.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Vincent Porter</h5>
                                                        <p class="preview">I'm going to office.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s2.jpg')}}" alt="s2.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Jacob Brown</h5>
                                                        <p class="preview">You: Where is Alex?</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s3.jpg')}}" alt="s3.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Harry Taylor</h5>
                                                        <p class="preview">I'm going to office.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s4.jpg')}}" alt="s4.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Sarah Miller</h5>
                                                        <p class="preview">You: okay!</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status away"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s5.jpg')}}" alt="s5.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Joanne Davies</h5>
                                                        <p class="preview">Let’s go!</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s6.jpg')}}" alt="s6.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Sam Lee</h5>
                                                        <p class="preview">Awesome!</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s7.jpg')}}" alt="s7.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Vincent Porter</h5>
                                                        <p class="preview">I'm going to office.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img class="img-fluid" src="{{asset('sol-assets/images/team/s8.jpg')}}" alt="s8.jpg" />
                                                    <div class="meta">
                                                        <h5 class="name">Jacob Brown</h5>
                                                        <p class="preview">You: Where is Alex?</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-7 col-xl-8 pr0 pl0">
                                <div class="user_heading">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="{{asset('sol-assets/images/team/s5.jpg')}}" alt="s5.jpg" />
                                            <div class="meta">
                                                <h5 class="name">Joanne Davies</h5>
                                                <p class="preview">was online today at 11:43</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="last_seen_time text-center">
                                    <a href="#">November 5, 2018</a>
                                </div>
                                <div class="inbox_chatting_box">
                                    <ul class="chatting_content">
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:31</div>
                                                <p>Hello, John!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:31</div>
                                                <p>simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's</p>
                                            </div>
                                        </li>
                                        <li class="media reply first">
                                            <div class="media-body text-right">
                                                <div class="date_time">Today, 10:35</div>
                                                <p>Are we meeting today?</p>
                                            </div>
                                        </li>
                                        <li class="media reply">
                                            <div class="media-body text-right">
                                                <div class="date_time">Today, 10:35</div>
                                                <p>The project finally complete! Let's go to!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:45</div>
                                                <p>Let's go!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:51</div>
                                                <p>simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:31</div>
                                                <p>Hello, John!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:31</div>
                                                <p>simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's</p>
                                            </div>
                                        </li>
                                        <li class="media reply first">
                                            <div class="media-body text-right">
                                                <div class="date_time">Today, 10:35</div>
                                                <p>Are we meeting today?</p>
                                            </div>
                                        </li>
                                        <li class="media reply">
                                            <div class="media-body text-right">
                                                <div class="date_time">Today, 10:35</div>
                                                <p>The project finally complete! Let's go to!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:45</div>
                                                <p>Let's go!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:51</div>
                                                <p>simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's</p>
                                            </div>
                                        </li>
                                        <li class="media reply first">
                                            <div class="media-body text-right">
                                                <div class="date_time">Today, 10:35</div>
                                                <p>Are we meeting today?</p>
                                            </div>
                                        </li>
                                        <li class="media reply">
                                            <div class="media-body text-right">
                                                <div class="date_time">Today, 10:35</div>
                                                <p>The project finally complete! Let's go to!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:45</div>
                                                <p>Let's go!</p>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid align-self-start mr-3" src="{{asset('sol-assets/images/team/s6.jpg')}}"
                                                alt="s6.jpg" />
                                            <div class="media-body">
                                                <div class="date_time">Today, 10:51</div>
                                                <p>simply dummy text of the printing and typesetting industry. Lorem
                                                    Ipsum has been the industry's</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="message_input">
                                    <form class="form-inline">
                                        <input class="form-control" type="search" placeholder="Enter text here..."
                                            aria-label="Search">
                                        <button class="btn" type="submit">Send <span
                                                class="flaticon-paper-plane"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row mt50 mb50">
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
    </div>
</div>
@endsection