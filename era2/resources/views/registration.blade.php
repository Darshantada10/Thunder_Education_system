{{-- @extends('app2')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 05:52:49 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dreams LMS</title>

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
{{-- <div class="main-wrapper log-wrap"> --}}
    <div class="row">
    
    <div class="col-md-6 login-bg">
    <div class="owl-carousel login-slide owl-theme">
    <div class="welcome-login">
    <div class="login-banner">
    <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
    </div>
    <div class="mentor-course text-center">
    <h2>Welcome to <br>Era Courses.</h2>
    <p>Era Is one of the best CS Coaching Institute in the city.</p>
    <p>Join Us Today and change the world with us</p>
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
        </div>
        <div class="welcome-login">
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
    <div class="img-logo">
    <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
    <div class="back-home">
    <a href="/login">Already Have an Account?</a>
    </div>
    </div>
    <h1>Sign up</h1>
    <form action="" method="POST">
        @csrf
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" id="name" name="name" class="form-control pass-input" placeholder="name">
    </div>
    <div class="form-group">
        <label for="email"> email</label>
        <input type="email" id="email" class="form-control pass-input" name="email" placeholder="email">
    </div>
    <div class="form-group">
        <label for="mobile"> mobile</label>
        <input type="mobile" id="mobile" class="form-control pass-input" name="mobile" placeholder="mobile">
    </div>
    {{-- <div class="form-group">
        <label for="course"> course</label>
        <input type="course" id="course" class="form-control pass-input" name="course" placeholder="course">
    </div> --}}
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" id="password" class="form-control pass-input" name="password" placeholder="password">
    {{-- <input type="password" class="form-control pass-input" placeholder="Enter your password"> --}}
    {{-- <span class="toggle-password feather-eye"></span> --}}
    <span class="pass-checked"><i class="feather-check"></i></span>
    </div>
    {{-- <div class="password-strength" id="passwordStrength">
    <span id="poor"></span>
    <span id="weak"></span>
    <span id="strong"></span>
    <span id="heavy"></span>
    </div> --}}
    {{-- <div id="passwordInfo"></div> --}}
    </div>
    {{-- <div class="form-check remember-me"> --}}
    {{-- <label class="form-check-label mb-0">
    <input class="form-check-input" type="checkbox" name="remember"> I agree to the <a href="term-condition">Terms of Service</a> and <a href="privacy-policy">Privacy Policy.</a>
    </label> --}}
    {{-- </div> --}}
    {{-- <div class="d-grid"> --}}
    <button class="btn btn-primary btn-start" type="submit">Create Account</button>
    </div>
    </div>
    <div class="flex items-center justify-end mt-4">
        <a href="{{ url('authorized/google') }}">
            <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
        </a>
    </div>
    </form>
    {{-- <div class="google-bg text-center">
    <span><a href="#">Or sign in with</a></span>
    <div class="sign-google">
    <ul>
    <li><a href="#"><img src="assets/img/net-icon-01.png" class="img-fluid" alt="Logo"> Sign In using Google</a></li>
    <li><a href="#"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>
    </ul>
    </div>
    <p class="mb-0">Already have an account? <a href="login">Sign in</a></p>
    </div> --}}
    </div>
    
    </div>
    </div>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>

<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/js/owl.carousel.min.js"></script>

<script src="/assets/js/script.js"></script>
</body>

<!-- Mirrored from dreamslms.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 05:52:50 GMT -->
</html>
    {{-- </div> --}}
    
{{-- @endsection --}}