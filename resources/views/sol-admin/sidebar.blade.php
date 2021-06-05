@section('sol-style')
<style>

</style>

@endsection

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

                    <!-- <li> <a class="dropdowm_menu"> <span class="flaticon-add-contact"></span> Catagoiry</a></li>
                    <li class="dropdown-menu1 _menu"><a href="#"><span class="flaticon-add-contact"></span> HTML</a></li>
                    <li class="dropdown-menu1 _menu"><a href="#"><span class="flaticon-add-contact"></span>CSS</a></li>
                    <li class="dropdown-menu1 _menu"><a href="#"><span class="flaticon-add-contact"></span>JavaScript</a></li> -->


                    <li><a href="{{route('categories.index')}}"><span class="flaticon-add-contact"></span> Add
                            Categories</a></li>
                    <li><a href="{{route('subcategories.index')}}"><span class="flaticon-add-contact"></span> Add Sub
                            Categories</a></li>
                    <li><a href="{{route('childcategories.index')}}"><span class="flaticon-add-contact"></span> Add
                            Child Categories</a></li>
                    <li><a href="{{route('form')}}"><span class="flaticon-add-contact"></span> Form</a></li>
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