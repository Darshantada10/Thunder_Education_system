<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>ERACIVILSERVICE</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.svg')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
{{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<div class="main-wrapper">

<header class="header header-page">

<div class="header-fixed">
<nav class="navbar navbar-expand-lg header-nav scroll-sticky">
<div class="container header-border">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="/" class="navbar-brand logo">
    <img src="/storage/{{$logos->logo}}" width="50px" class="img-fluid" alt="Logo">
</a>
</div>

<div class="main-menu-wrapper">
<div class="menu-header">
<a href="/" class="menu-logo">
    <img src="/storage/{{$logos->logo}}" width="20px" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>

<ul class="main-nav">

    @foreach ($navbars as $navbar)
    <li class="has-submenu active">
                
            <a href="/{{$navbar->navbar}}">{{GoogleTranslate::trans("$navbar->navbar" ,\App::getLocale())}}</a>
            
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link header-sign" href="{{$navbar->navbar}}">{{$navbar->navbar}}</a>
            </li> --}}
        @endforeach
    
        {{-- <li class="nav-item">
            <a class="nav-link header-sign" href="/discussion">Discussion</a>
        </li> --}}
        @guest
        
    <li class="nav-item">
        <a class="nav-link header-sign" href="/login">{{GoogleTranslate::trans("Signin" ,\App::getLocale())}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link header-login" href="/register">{{GoogleTranslate::trans("Signup" ,\App::getLocale())}}</a>
    </li>
    @else 
    <li class="nav-item">
        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
            <span class="user-img">
<img src="/storage/users-avatar/{{Auth::user()->avatar}}" alt="">
<span class="status online"></span>
            </span>
        </a>
        <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
            <div class="user-header">
                <div class="avatar avatar-sm">
                    <img src="/storage/users-avatar/{{Auth::user()->avatar}}"" alt="User Image" class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                    <h6>{{Auth::user()->name}}</h6>
                    {{-- <p class="text-muted mb-0">Student</p> --}}
                </div>
            </div>
            <a class="dropdown-item" href="/profile/"><i class="feather-user me-1"></i> Profile</a>
            <a class="dropdown-item" href="/logout/"><i class="feather-log-out me-1"></i> Logout</a>
        </div>
    </li>
    @endguest
    </ul>
    <div class="col-md-1">
        <select class="form-select changeLanguage">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
            <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : ''}}>Hindi</option>
            <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : ''}}>Gujarati</option>
        </select>
    </div>
</div>


</div>
</nav>
</div>
</header>

@yield('content')


<footer class="footer footer-five">

    <div class="footer-top-five">

    <div class="container">

    <div class="footer-five-left">

    <img src="{{asset('assets/img/bg/footer-left.svg')}}" alt="">
    </div>

    <div class="row">

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
    
    <div class="footer-contact footer-menu-five">
    <h2 class="footer-title footer-title-five">{{GoogleTranslate::trans("Get in touch" ,\App::getLocale())}}</h2>
    <div class="footer-contact-info">
    <div class="footer-address">
    <span><i class="feather-map-pin"></i></span>
    <p>{{$footer->address}}</p>
    </div>
    <p class="mb-0">
    <span class="phone-icon"><i class="fa-solid fa-phone-volume"></i></span>
    {{$footer->mobile}}
    </p>
    <p class="mb-0">
    <span class="email-icon"><i class="fa-solid fa-phone-volume"></i></span>
    {{$footer->email}}
    </p>
    </div>
    </div>
    
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-12">

        {{-- <a href="/">
            <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Footer Logo">
            </a> --}}
    
    {{-- <div class="footer-menu footer-menu-five">
    <h2 class="footer-title footer-title-five"><i class="fa-sharp fa-solid fa-dash"></i>For Instructor</h2>
    <ul>
    <li><a href="instructor-profile">Profile</a></li>
    <li><a href="login">Login</a></li>
    <li><a href="register">Register</a></li>
    <li><a href="instructor-list">Instructor</a></li>
    <li><a href="deposit-instructor-dashboard"> Dashboard</a></li>
    </ul>
    </div> --}}
    
    </div>

    <div class="col-lg-2 col-md-3 col-sm-12">
        <div class="col-md-4">
            <div class="social-icon-five">
                <ul class="nav">
                    <li>
                        <a href="/www.facebook.com" target="_blank" class="facebook-icon">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                        </li>
                </ul>
            </div>
        </div>
    {{-- <div class="footer-menu footer-menu-five">
    <h2 class="footer-title footer-title-five">For Student</h2>
    <ul>
    <li><a href="student-profile">Profile</a></li>
    <li><a href="login">Login</a></li>
    <li><a href="register">Register</a></li>
    <li><a href="students-list">Student</a></li>
    <li><a href="deposit-student-dashboard"> Dashboard</a></li>
    </ul>
    </div> --}}
    
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    {{-- <h2 class="footer-title footer-title-five">Get More Updates</h2> --}}
    
    
    <div class="footer-about-five">
    <p>{{$footer->information}}</p>
    </div>

</div>

    </div>
    
    </div>
    </div> 
    
    
    <div class="footer-bottom footer-bottom-five">
    <div class="container">
    
    <div class="copyright-five">
    <div class="row align-items-center">
    <div class="col-md-4">
    <div class="footer-logo-five">
   
    </div>
    </div>
    <div class="col-md-4">
    <div class="copyright-text">
    <p>&copy; 2023 ERACIVILSERVICE. All rights reserved.</p>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    </div>
    
    </footer>

</div>


<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/plugins/aos/aos.js')}}"></script>

<script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/slick/slick.js')}}"></script>

<script src="{{asset('assets/plugins/swiper/js/swiper.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>


<script>
    $('.changeLanguage').change(function(event){
        var url = "{{ route('google.translate.change') }}";
        window.location.href = url+"?lang="+$(this).val()
    })
</script>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.waypoints.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/plugins/slick/slick.js"></script>

<script src="assets/plugins/aos/aos.js"></script>

<script src="assets/js/script.js"></script>


</body>

</html>