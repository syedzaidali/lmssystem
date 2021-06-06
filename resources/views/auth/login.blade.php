<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- css file -->

    <link rel="stylesheet" href="{{asset('sol-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('sol-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('sol-assets/css/dashbord_navitaion.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('sol-assets/css/responsive.css')}}">
    <!-- Title -->
    <title>Solmax Group</title>
    <!-- Favicon -->
    <link href="{{asset('sol-assets/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('sol-assets/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
</head>

<body class="bgc-fa">
    <div class="wrapper">
    </div>


    <section class="our-log bgc-fa">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="login_form inner_page">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="heading">
                                <h3 class="text-center">Login to your account</h3>
                                <p class="text-center">Don't have an account?
                                    <a class="text-thm" href="">Sign Up!</a>
                                </p>
                            </div>


                            <div class="form-group ">

                                <input id="email" placeholder="Email Address" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group custom-control custom-checkbox">

                                <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                @if (Route::has('password.request'))
                                <a class="tdu btn-fpswd float-right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">
                                {{ __('Login') }}
                            </button>
                            <div class="divide">
                                <span class="lf_divider">Or</span>
                                <hr>
                            </div>
                            <div class="row mt40">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i
                                            class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i
                                            class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>