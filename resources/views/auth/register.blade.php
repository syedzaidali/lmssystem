@extends('layouts.solmaster')

@section('sol-content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Resgister</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Resgister</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-log bgc-fa">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="sign_up_form inner_page">
                    <!-- <div class="card-header">{{ __('Register') }}</div> -->
                    <div class="heading">
                        <h3 class="text-center">Register to start learning</h3>
                        <p class="text-center">Have an account? <a class="text-thm" href="page-login.html">Login</a></p>
                    </div>
                    <div class="details">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group ">
                                <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                                <!-- <div class="col-md-6"> -->
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!-- </div> -->
                            </div>

                            <div class="form-group ">
                                <!-- <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!-- </div> -->
                            </div>

                            <div class="form-group ">
                                <!-- <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                <!-- <div class="col-md-6"> -->
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!-- </div> -->
                            </div>

                            <div class="form-group ">
                                <!-- <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                                <!-- <div class="col-md-6"> -->
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                <!-- </div> -->
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                <label class="custom-control-label" for="exampleCheck3">Want to become an
                                    instructor?</label>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">
                                {{ __('Register') }}
                            </button>
                            <div class="divide">
                                <span class="lf_divider">Or</span>
                                <hr>
                            </div>

                            <div class="row mt40">
                                <div class="col-lg">
                                    <button class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection