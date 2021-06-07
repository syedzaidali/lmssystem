@extends('layouts.soladmin')

@section('sol-content')

    <div class="our-dashbord dashbord">
        <div class="dashboard_main_content">
            <div class="container-fluid">
                <div class="main_content_container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                                <h4 class="title float-left">My Course</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>


                    <div class="container my-3">
                        <form action="{{ route('cousre-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleInput1">Course Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Course Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="my_profile_select_box tt_video form-group">
                                        <label for="">Main Category</label><br>
                                        <select class="form-control" name="categories_id" id="categories_id">
                                            <option> Select Main Category</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="my_profile_select_box tt_video form-group">
                                        <label for="exampleFormControlInput5">Sub Category</label><br>
                                        <select class="form-control" name="sub_categories_id" id="sub_categories_id">
                                            <option> Select Sub Category</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="my_profile_select_box tt_video form-group">
                                        <label for="exampleFormControlInput5">Chalid Category</label><br>
                                        <select class="form-control" name="child_categories_id" id="child_categories_id">
                                            <option> Select Chalid Category</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="pass">Image</label>
                                        <input type="file" id="photo" class="form-control" name="photo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="url">Course Video</label>

                                        <input type="file" name="video" id="video" class="form-control">

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="pass">Credit</label>
                                        <input type="number" id="price" class="form-control" name="price"
                                            placeholder="Credit">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="my_profile_select_box tt_video form-group">
                                        <label for="">Featured</label><br>
                                        <select class="form-control" name="featured" id="featured">
                                            <option> Select featured</option>
                                            <option value="1">YES</option>
                                            <option value="0">NO</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="my_profile_select_box tt_video form-group">
                                        <label for="">Latest</label><br>
                                        <select class="form-control" name="latest" id="latest">
                                            <option> Select Latest</option>
                                            <option value="1">YES</option>
                                            <option value="0">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="my_profile_select_box tt_video form-group">
                                        <label for="">Status</label><br>
                                        <select class="form-control" name="status" id="status">
                                            <option> Select Status</option>
                                            <option value="1">Actived</option>
                                            <option value="0">Deactived</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">

                                    <button type="submit" class="btn btn-lg btn-success">Success</button>

                                </div>
                            </div>
                        </form>

                    </div>




                </div>
            </div>
        </div>
    </div>

@endsection

@section('sol-script')

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');

        $(document).ready(function() {

            $('#categories_id').on('change', function() {
                var categories_id = this.value;

                $("#sub_categories_id").html('');
                $.ajax({
                    url: "{{ url('get-categories-by-sub_categories') }}",
                    type: "get",
                    data: {
                        categories_id: categories_id,
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#sub_categories_id').append(
                            '<option value="">Select Sub Categories</option>');
                        $.each(result.sub_categories, function(key, value) {
                            $("#sub_categories_id").append('<option value="' + value
                                .id + '">' +
                                value.name + '</option>');
                        });
                        $('#child_categories_id').html(
                            '<option value="">Select Sub Categories First</option>');
                    }
                });
            });
            $('#sub_categories_id').on('change', function() {
                var sub_categories_id = this.value;

                $("#child_categories_id").html('');
                $.ajax({
                    url: "{{ url('get-sub_categories-by-child_categories') }}",
                    type: "get",
                    data: {
                        sub_categories_id: sub_categories_id,
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#child_categories_id').append(
                            '<option value="">Select Sub Topic</option>');
                        $.each(result.child_categories, function(key, value) {
                            $("#child_categories_id").append('<option value="' + value
                                .id + '">' +
                                value.name + '</option>');
                        });
                    }
                });
            });
        });

    </script>
@endsection
