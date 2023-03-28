<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 05:52:49 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Era Civil Service</title>

<link rel="shortcut icon" type="image/x-icon" href="/storage/{{$logos->logo}}">

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="/assets/plugins/feather/feather.css">

<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

{{-- @extends('app2')

@section('content') --}}
<div class="main-wrapper log-wrap">
    <div class="row">
    
    <div class="col-md-6 login-bg">
    <div class="owl-carousel login-slide owl-theme">
    <div class="welcome-login">
    <div class="login-banner">
    <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
    </div>
    <div class="mentor-course text-center">
    <h2>Welcome to <br>Era Courses.</h2>
<p>Era Is one of the best CS Coaching Institute in the city</p>
<p>Welcome Back Dear Fellow Student</p>
    </div>
    </div>
    {{-- <div class="welcome-login">
    <div class="login-banner">
    <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
    </div>
    <div class="mentor-course text-center">
    <h2>Welcome to <br>Era Courses.</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    </div>
    </div> --}}
    {{-- <div class="welcome-login">
    <div class="login-banner">
    <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
    </div>
    <div class="mentor-course text-center">
    <h2>Welcome to <br>Era Courses.</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    </div>
    </div> --}}
    </div>
    </div>
    
    <div class="col-md-6 login-wrap-bg">
    
    <div class="login-wrapper">
    <div class="loginbox">
    <div class="w-100">
    <div class="img-logo">
    <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
    <div class="back-home">
    <a href="/register">Create An Account</a>
    </div>
    </div>
    <h1>Sign into Your Account</h1>
    <form action="" method="POST">
        @csrf
        
    <div class="form-group">
        
        <label class="form-control-label" for="email"> email</label>
        <input type="email" class="form-control" id="email" name="email"placeholder="email">
        
        {{-- <label class="form-control-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email address"> --}}
    </div>
    <div class="form-group">
        <label class="form-control-label" for="password">password</label>
        <input type="password" id="password"class="form-control" name="password" placeholder="password">
    {{-- <label class="form-control-label">Password</label>
    <div class="pass-group">
    <input type="password" class="form-control pass-input" placeholder="Enter your password">
    <span class="feather-eye toggle-password"></span>
    </div> --}}
    </div>
    <div class="forgot">
    <span><a class="forgot-link" href="forgot-password">Forgot Password ?</a></span>
    </div>
    <div class="remember-me">
    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
    <input type="checkbox" name ="remember_me" id="remember_me">
    <span class="checkmark"></span>
    </label>
    </div>
    <div class="d-grid">
    <button class="btn btn-primary btn-start" type="submit">Sign In</button>
    </div>
    <div class="flex items-center justify-end mt-4">
        <a href="{{ url('authorized/google') }}">
            <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
        </a>
    </div>
    </form>
    </div>
    </div>
    {{-- <div class="google-bg text-center">
    <span><a href="#">Or sign in with</a></span>
    <div class="sign-google">
    <ul>
    <li><a href="#"><img src="assets/img/net-icon-01.png" class="img-fluid" alt="Logo"> Sign In using Google</a></li>
    <li><a href="#"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>
    <p class="mb-0">New User ? <a href="/register">Create an Account</a></p>
    </ul>
    </div>
    </div> --}}
    </div>
    
    </div>
    </div>
    </div>
{{-- @endsection --}}

<script src="/assets/js/jquery-3.6.0.min.js"></script>

<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/js/owl.carousel.min.js"></script>

<script src="/assets/js/script.js"></script>
</body>

<!-- Mirrored from dreamslms.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 05:52:50 GMT -->
</html>