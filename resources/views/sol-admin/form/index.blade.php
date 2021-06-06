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

<section class="job-location pb30">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="shortcode_widget_accprdons">
                    <h4>Accordions</h4>
                    <div class="faq_according">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            I can’t remember my user id and/or password, can you reset it?
                                            <span class="flaticon-right-arrow float-right"></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header active" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How can I find out who is the hiring manager or lead recruiter.
                                            <span class="flaticon-right-arrow float-right"></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Track your results on the local or global market , depending on your needs. You
                                        can track everything in the most popular search engines - and increase traffic
                                        with our turn-key.
                                        <br><br>
                                        Positionly is the only solution on the market that provides a simple and
                                        transparent way to monitor.the effectiveness.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            I have several accounts, can they be purged or deleted?
                                            <span class="flaticon-right-arrow float-right"></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="shortcode_widget_tab">
                    <h4>Tabs</h4>
                    <div class="ui_kit_tab mt30">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Item 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Item 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Item 3</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                Sed bibendum quis orci sit amet fringilla. Suspendisse nec massa at sem condimentum
                                rutrum id cursus odio. Phasellus sollicitudin ante vitae erat posuere faucibus.
                                Pellentesque nec tristique purus. In dapi bus fermentum nibh, ut imperdiet magna
                                volutpat in. Vestibulum semper eleifend augue ac consectetur. Pellentesque tempus sit
                                amet massa et rutrum.</div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Sed
                                bibendum quis orci sit amet fringilla. Suspendisse nec massa at sem condimentum rutrum
                                id cursus odio. Phasellus sollicitudin ante vitae erat posuere faucibus. Pellentesque
                                nec tristique purus. In dapi bus fermentum nibh, ut imperdiet magna volutpat in.
                                Vestibulum semper eleifend augue ac consectetur. Pellentesque tempus sit amet massa et
                                rutrum.</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Sed
                                bibendum quis orci sit amet fringilla. Suspendisse nec massa at sem condimentum rutrum
                                id cursus odio. Phasellus sollicitudin ante vitae erat posuere faucibus. Pellentesque
                                nec tristique purus. In dapi bus fermentum nibh, ut imperdiet magna volutpat in.
                                Vestibulum semper eleifend augue ac consectetur. Pellentesque tempus sit amet massa et
                                rutrum.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="shortcode_widget_table">
                    <h4>Table</h4>
                    <div class="ui_kit_table">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Column 1</th>
                                    <th scope="col">Column 2</th>
                                    <th scope="col">Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                                <tr>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                                <tr>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="shortcode_widget_message_box">
                    <h4>Message Boxes</h4>
                    <div class="ui_kit_message_box">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            Please fill in all the fields required
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    <div class="ui_kit_message_box">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            You did it, now relax and enjoy it
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    <div class="ui_kit_message_box">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Change this and that and try again
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    <div class="ui_kit_message_box">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Please check the information below
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shortcode_widget_buttons">
                    <h4>Bootstrap Buttons</h4>
                    <div class="ui_kit_button mb35">
                        <button type="button" class="btn btn-lg btn-primary">Primary</button>
                        <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-lg btn-success">Success</button>
                        <button type="button" class="btn btn-lg btn-danger">Danger</button>
                        <button type="button" class="btn btn-lg btn-warning">Warning</button>
                        <button type="button" class="btn btn-lg btn-info">Info</button>
                        <button type="button" class="btn btn-lg btn-light">Light</button>
                    </div>
                    <div class="ui_kit_button mb35">
                        <button type="button" class="btn btn-lg btn-thm">Button</button>
                        <button type="button" class="btn btn-lg btn-dark">Button</button>
                        <button type="button" class="btn btn-lg btn-gray">Button</button>
                        <button type="button" class="btn btn-lg btn-transparent">Button</button>
                        <button type="button" class="btn btn-lg btn-green">Button</button>
                        <button type="button" class="btn btn-lg btn-white">Button</button>
                    </div>
                    <div class="ui_kit_button mb35">
                        <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-thm circle">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-dark circle">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-thm2 circle">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-thm3 circle">Button</button>
                    </div>
                    <div class="ui_kit_button">
                        <button type="button" class="btn dbxshad btn-lg btn-thm white">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-thm rounded">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-dark rounded">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-thm2 rounded">Button</button>
                        <button type="button" class="btn dbxshad btn-lg btn-thm3 rounded">Button</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shortcode_form_title">
                    <h4>Form</h4>
                </div>
            </div>
        </div>
        <div class="row mt40">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="shortcode_widget_form">
                    <div class="ui_kit_input">
                        <form>
                            <div class="form-group">
                                <h5>Input</h5>
                                <input type="text" class="form-control h50" id="exampleInputText"
                                    placeholder="Creative Layers">
                            </div>
                        </form>
                    </div>
                    <div class="ui_kit_select_search">
                        <h5>Search Select boxes</h5>
                        <div class="dropdown bootstrap-select" style="width: 100%;"><select class="selectpicker"
                                data-live-search="true" data-width="100%" tabindex="-98">
                                <option data-tokens="banking">Banking</option>
                                <option data-tokens="digital&amp;creative">Digital&amp;Creative</option>
                                <option data-tokens="retail">Retail</option>
                                <option data-tokens="humanresource">Human Resources</option>
                                <option data-tokens="management">Management</option>
                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                role="button" title="Banking">
                                <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">Banking</div>
                                    </div>
                                </div>
                            </button>
                            <div class="dropdown-menu " role="combobox">
                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"
                                        role="textbox" aria-label="Search"></div>
                                <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                    <ul class="dropdown-menu inner show"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui_kit_textarea mt50">
                        <form>
                            <div class="form-group">
                                <h5>Textarea</h5>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="ui_kit_tooltip mt50">
                        <h4>Tooltips</h4>
                        <button type="button" class="btn btn-gray" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Top">
                            Top
                        </button>
                        <button type="button" class="btn btn-gray" data-toggle="tooltip" data-placement="bottom"
                            title="" data-original-title="Bottom">
                            Bottom
                        </button>
                        <button type="button" class="btn btn-gray" data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="Right">
                            Right
                        </button>
                        <button type="button" class="btn btn-gray" data-toggle="tooltip" data-placement="left" title=""
                            data-original-title="Left">
                            Left
                        </button>
                    </div>
                    <div class="cl_pricing_slider mt90">
                        <div class="company_life">
                            <h4>Range Slider</h4>
                            <div
                                class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                    style="left: 0%; width: 47.619%;"></div><span tabindex="0"
                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                    style="left: 0%;"></span><span tabindex="0"
                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                    style="left: 47.619%;"></span>
                            </div>
                            <input type="text" class="amount" placeholder="Price: $50"> —
                            <input type="text" class="amount2" placeholder="$120">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="ui_kit_select_box">
                    <h5>Select boxes</h5>
                    <div class="dropdown bootstrap-select custom-select-lg mb-3"><select
                            class="selectpicker custom-select-lg mb-3" tabindex="-98">
                            <option value="one">Item 1</option>
                            <option value="Two">Item 2</option>
                            <option value="Three">Item 3</option>
                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                            role="button" title="Item 1">
                            <div class="filter-option">
                                <div class="filter-option-inner">
                                    <div class="filter-option-inner-inner">Item 1</div>
                                </div>
                            </div>
                        </button>
                        <div class="dropdown-menu " role="combobox">
                            <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                <ul class="dropdown-menu inner show"></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shortcode_widget_multiselect">
                    <h5>Multiple Select Boxes</h5>
                    <div class="ui_kit_multi_select_box">
                        <div class="dropdown bootstrap-select show-tick dropup"><select class="selectpicker" multiple=""
                                tabindex="-98">
                                <option>Banking</option>
                                <option>Digital&amp;Creative</option>
                                <option>RetCail</option>
                                <option>Human Resources</option>
                                <option>Management</option>
                            </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light"
                                data-toggle="dropdown" role="button" title="Nothing selected" aria-expanded="false">
                                <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">Nothing selected</div>
                                    </div>
                                </div>
                            </button>
                            <div class="dropdown-menu" role="combobox" x-placement="top-start"
                                style="max-height: 1732px; overflow: hidden; min-height: 110px; position: absolute; transform: translate3d(0px, -12px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"
                                    style="max-height: 1714px; overflow-y: auto; min-height: 92px;">
                                    <ul class="dropdown-menu inner show">
                                        <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0"
                                                aria-selected="false"><span
                                                    class=" bs-ok-default check-mark"></span><span
                                                    class="text">Banking</span></a></li>
                                        <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0"
                                                aria-selected="false"><span
                                                    class=" bs-ok-default check-mark"></span><span
                                                    class="text">Digital&amp;Creative</span></a></li>
                                        <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0"
                                                aria-selected="false"><span
                                                    class=" bs-ok-default check-mark"></span><span
                                                    class="text">RetCail</span></a></li>
                                        <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0"
                                                aria-selected="false"><span
                                                    class=" bs-ok-default check-mark"></span><span class="text">Human
                                                    Resources</span></a></li>
                                        <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0"
                                                aria-selected="false"><span
                                                    class=" bs-ok-default check-mark"></span><span
                                                    class="text">Management</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt50">
                    <div class="col-lg-4">
                        <div class="shortcode_widget_radiobox">
                            <h5 class="mb20">Radiobox</h5>
                            <div class="ui_kit_radiobox">
                                <div class="radio">
                                    <input id="radio_one" name="radio" type="radio" checked="">
                                    <label for="radio_one"><span class="radio-label"></span> Last Hour</label>
                                </div>
                                <div class="radio">
                                    <input id="radio_two" name="radio" type="radio">
                                    <label for="radio_two"><span class="radio-label"></span> Last 24 hours</label>
                                </div>
                                <div class="radio">
                                    <input id="radio_three" name="radio" type="radio">
                                    <label for="radio_three"><span class="radio-label"></span> Last 7 days</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shortcode_widget_checkbox">
                            <h5 class="mb20">Checkbox</h5>
                            <div class="ui_kit_checkbox">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">HTML 5</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Javascript</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">PHP</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shortcode_widget_switch">
                            <h5 class="mb20">Switch</h5>
                            <div class="ui_kit_whitchbox">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Freelance</label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Full Time</label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3">Part Time</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui_kit_progress_bar mt50">
                    <div class="shortcode_widget_progressbar">
                        <h4 class="mb50">Progress bars</h4>
                        <!--Progress Levels-->
                        <ul class="skills">
                            <li><span class="fwb">90%</span></li>
                            <div class="sonny_progressbar" data-width="90">
                                <p class="title">Comfortable</p>
                                <div class="bar-container " style="background-color:#E0E0E0;height:30px;"><span
                                        class="backgroundBar"></span><span class="targetBar"
                                        style="width:95%;background-color:#CCC;"></span><span class="bar"
                                        style="background-color: rgb(36, 65, 231); opacity: 1; width: 90%;"></span>
                                </div>
                            </div>
                            <li><span class="fwb">40%</span></li>
                            <div class="sonny_progressbar" data-width="40">
                                <p class="title">Service</p>
                                <div class="bar-container " style="background-color:#E0E0E0;height:30px;"><span
                                        class="backgroundBar"></span><span class="targetBar"
                                        style="width:90%;background-color:#CCC;"></span><span class="bar"
                                        style="background-color: rgb(36, 65, 231); opacity: 1; width: 40%;"></span>
                                </div>
                            </div>
                            <li><span class="fwb">70%</span></li>
                            <div class="sonny_progressbar" data-width="70">
                                <p class="title">Equipment</p>
                                <div class="bar-container " style="background-color:#E0E0E0;height:30px;"><span
                                        class="backgroundBar"></span><span class="targetBar loader"
                                        style="width:50%;background-color:#CCC;"></span><span class="bar"
                                        style="background-color: rgb(36, 65, 231); opacity: 1; width: 70%;"></span>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('sol-script')

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('summary-ckeditor');
</script>
@endsection