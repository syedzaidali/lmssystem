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
    <section class="our-log bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="sign_up_form inner_page">
                    <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->

                    <div class="heading">
                        <h3 class="text-center">{{ __('Reset Password') }}</h3>
                        <!-- <p class="text-center">Have an account? <a class="text-thm" href="page-login.html">Login</a></p> -->
                    </div>

                    <div class="details">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <!-- <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!-- </div> -->
                            </div>
                            <button type="submit" class="tn btn-log btn-block btn-thm2">
                                {{ __('Send Password Reset Link') }}
                            </button>

                            <!-- <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    </div>
</body>

</html>

