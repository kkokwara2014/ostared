{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap_assets/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/css/style.css') }}">
    <!-- endinject -->
    {{-- <link rel="shortcut icon" href="{{ asset('bootstrap_assets/assets/images/favicon.png') }}" /> --}}
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            {{-- <div class="brand-logo">
                                <img src="{{ asset('bootstrap_assets/assets/images/logo.svg') }}" alt="logo">
                            </div> --}}
                            <h1 style="text-align: center"><strong>OSTARED</strong></h1>
                            <h2 style="text-align: center">Online Staff Redeployment Platform</h2>
                            <hr>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        id="exampleInputEmail1" placeholder="Email" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>



                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" id="exampleInputPassword1" placeholder="Password" required
                                        autocomplete="current-password">


                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <input class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                        type="submit" value="SIGN IN">
                                    {{-- <a class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                        href="{{ asset('bootstrap_assets/index.html') }}">SIGN IN</a> --}}
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}> Keep me signed in
                                        </label>


                                    </div>
                                    <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot
                                        password?</a>

                                </div>
                                <hr>
                                <small style="font-size: 12px;">Powered by Done-Right Systems - <a
                                        href="tel:+2348038883919">08038883919</a></small>
                                {{-- <div class="mb-2 d-grid gap-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="ti-facebook me-2"></i>Connect using facebook </button>
                                </div> --}}
                                {{-- <div class="text-center mt-4 fw-light"> Don't have an account? <a href="register.html"
                                        class="text-primary">Create</a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('bootstrap_assets/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('bootstrap_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('bootstrap_assets/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('bootstrap_assets/assets/js/template.js') }}"></script>
    <script src="{{ asset('bootstrap_assets/assets/js/settings.js') }}"></script>
    <script src="{{ asset('bootstrap_assets/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('bootstrap_assets/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
