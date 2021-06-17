<!-- @section('sol-style')

@endsection -->

<section class="dashboard_sidebar dn-1199">
    <div class="dashboard_sidebars">
        <div class="user_board">
            <div class="user_profile">
                <div class="media">
                    <div class="media-body">
                        <h4 class="mt-0">Start</h4>
                    </div>
                </div>
            </div>
            <div class="dashbord_nav_list">
                <ul>
                    <li class="active"><a href="{{route('admin-dashboard')}}"><span class="flaticon-puzzle-1"></span>
                            Dashboard</a></li>
                    <li><a href="{{route('my-course')}}"><span class="flaticon-online-learning"></span> My Courses</a>
                    </li>
                    <li><a href="{{route('order')}}"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                    <li><a href="{{route('message')}}"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                    <li><a href=""><span class="flaticon-rating"></span> Reviews</a></li>
                    <li><a href=""><span class="flaticon-like"></span> Bookmarks</a></li>
                    <li><a href="{{route('listing')}}"><span class="flaticon-add-contact"></span> Add listing</a></li>

                    <li> <a class="dropdown_menu" style="cursor: pointer"> <span class="flaticon-add-contact"></span> Category</a></li>
                        <ul class="_menu" style="display: none !important;">
                            <li><a href="{{route('categories.index')}}"><span class="flaticon-add-contact"></span> Add Categories</a></li>
                            <li><a href="{{route('subcategories.index')}}"><span class="flaticon-add-contact"></span> Add SubCategories</a></li>
                            <li><a href="{{route('childcategories.index')}}"><span class="flaticon-add-contact"></span> Add Child Categories</a></li>
                        </ul>
                    <li><a href="{{route('testimonial.index')}}"><span class="flaticon-add-contact"></span>Testimonial </a></li>
                    <li><a href="{{route('slider.index')}}"><span class="flaticon-add-contact"></span>Banner Slider </a></li>
                    <li><a href="{{route('form')}}"><span class="flaticon-add-contact"></span> Form</a></li>
                    <li><a href="{{route('cousre-create')}}"><span class="flaticon-add-contact"></span> Add Course </a></li>
                </ul>
                <h4>Account</h4>
                <ul>
                    <li><a href=""><span class="flaticon-settings"></span> Settings</a></li>
                    {{-- <li><a href="{{route('sol-login')}}"><span class="flaticon-logout"></span> Logout</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>


@section('sol-script')


@endsection