@extends('layouts.soladmin')


@section('sol-content')

<div class="our-dashbord dashbord">
    <div class="dashboard_main_content">
        <div class="container-fluid">
            <div class="main_content_container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                            <h4 class="title float-left">Form</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="container my-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput1">Course title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="UX/UI">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="my_profile_select_box tt_video form-group">
                                <label for="exampleFormControlInput5">Video category</label><br>
                                <select class="selectpicker">
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>UX/UI, HTML, Photoshop</option>
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="my_profile_setting_input form-group">
                                <label for="start">Start date</label>
                                <input type="date" id="start" class="form-control" name="trip-start" value="2018-07-22"
                                    min="2018-01-01" max="2018-12-31">
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">

                            <div class="my_profile_setting_input form-group">
                                <label for="start">End date</label>
                                <input type="date" id="start" class="form-control" name="trip-start" value="2018-07-22"
                                    min="2018-01-01" max="2018-12-31">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="my_profile_setting_input form-group">
                                <label for="pass">Password (8 characters minimum)</label>
                                <input type="password" id="pass" class="form-control" name="password" minlength="8"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="my_profile_setting_input form-group">
                                <label for="url">Enter an https:// URL</label>

                                <input type="url" name="url" id="url" class="form-control"
                                    placeholder="https://example.com" pattern="https://.*" size="30" required>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="my_profile_setting_input input-group">
                                <input type="text" class="form-control mb-0" placeholder="Search this blog">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 sol-sm-12">

                            <div class="my-4">
                                <p>Radio button</p>

                                <div class="">
                                    <input type="radio" id="huey" name="drone" value="huey" checked>
                                    <label for="huey">Huey</label>
                                </div>

                                <div>
                                    <input type="radio" id="dewey" name="drone" value="dewey">
                                    <label for="dewey">Dewey</label>
                                </div>

                                <div>
                                    <input type="radio" id="louie" name="drone" value="louie">
                                    <label for="louie">Louie</label>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 sol-sm-12">
                            <div class="my-4">
                                <p>Checkbox</p>
                                <div class="my_profile_setting_input form-group">
                                    <label for="cheese">Do you like cheese?</label>
                                    <input type="checkbox" class="form-group" name="cheese" id="cheese">
                                </div>

                                <div class="my_profile_setting_input form-group">
                                    <label for="peas">Do you like peas?</label>
                                    <input type="checkbox" class="form-group" name="peas" id="peas">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
                    </div>
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
</script>
@endsection