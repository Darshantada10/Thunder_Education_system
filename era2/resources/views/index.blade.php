{{-- use Stichoza\GoogleTranslate\GoogleTranslate; --}}
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/html/index-three by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 05:49:23 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Era Civil Service</title>
{{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}

<link rel="shortcut icon" type="image/x-icon" href="/storage/{{$logos->logo}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/slick/slick-theme.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/swiper/css/swiper.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="home-three">

<div class="main-wrapper">

<header class="header-three">

    <style>
        .instructions {
  text-align:center;
  font-size:20px;
  margin: 15vh;
}  

/* //////////////////////////////////////////////////////////////////////////////////////////////
	//   Default Modal Styles   //
////////////////////////////////////////////////////////////////////////////////////////////// */
/*   This is the background overlay   */
.backgroundOverlay {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
	background: #000000;
	opacity: .85;
	filter: alpha(opacity=85);
	-moz-opacity: .85;
	z-index: 101;
	display: none;
}
/*   This is the Popup Window   */
.delayedPopupWindow {
	display: none;
	position: fixed;
	width: auto;
	max-width: 480px;
	height: 310px;
	top: 50%;
	left: 50%;
	margin-left: -260px;
	margin-top: -180px;
	background-color: #efefef;
	border: 2px solid #333;
	z-index: 102;
	padding: 10px 20px;
}
/*   This is the closing button  */
#btnClose {
	width:100%;
	display: block;
	text-align: right;
	text-decoration: none;
	color: #BCBCBC;
}
/*   This is the closing button hover state  */
#btnClose:hover {
	color: #c90c12;
}
/*   This is the description headline and paragraph for the form   */
#delayedPopup > div.formDescription {
	float: left;
	display: block;
	width: 44%;
	padding: 1% 3%;
	font-size: 18px;
	color: #666;
	clear: left;
}
/*   This is the styling for the form's headline   */
#delayedPopup > div.formDescription h2 {
	color: #444444;
	font-size: 36px;
	line-height: 40px;
}

/* 
////////// MailChimp Signup Form //////////////////////////////
*/

/*   This is the signup form body  */
#delayedPopup #mc_embed_signup {
	float: left;
	width: 47%;
	padding: 1%;
	display: block;
	font-size: 16px;
	color: #666;
	margin-left: 1%;
}
/*   This is the styling for the signup form inputs  */
#delayedPopup #mc-embedded-subscribe-form input {
	width: 95%;
	height: 30px;
	font-size: 18px;
	padding: 3px;
  margin-bottom: 5px;
}
/*   This is the styling for the signup form inputs when they are being hovered with the mouse  */
#delayedPopup #mc-embedded-subscribe-form input:hover {
	border:solid 2px #40c348;
	box-shadow: 0 1px 3px #AAAAAA;
}
/*   This is the styling for the signup form inputs when they are focused  */
#delayedPopup #mc-embedded-subscribe-form input:focus {
	border:solid 2px #40c348;
	box-shadow: none;
}
/*   This is the styling for the signup form submit button  */
#delayedPopup #mc-embedded-subscribe {
	width: 100%!important;
	height: 40px!important;
	margin: 10px auto 0 auto;
	background: #5D9E62;
	border: none;
	color: #fff;
}
/*   This is the styling for the signup form submit button hover state  */
#delayedPopup #mc-embedded-subscribe:hover {
	background: #40c348;
	color: #fff;
	box-shadow:none!important;
	cursor: pointer;
}
    </style>

    {{-- <div class="instructions">Wait for 5 seconds</div> --}}

{{-- <div id="bkgOverlay" class="backgroundOverlay"></div> --}}
  
<div id="delayedPopup" class="delayedPopupWindow">
  <!-- This is the close button -->
  <a href="#" id="btnClose" title="Click here to close this deal box.">[ X ]</a>
  <!-- This is the left side of the popup for the description -->
  <div class="formDescription">
    <h2><span style="color: #40c348; font-weight: bold;">Join Us Today</span></h2>
    <p>Inquire Today To Be One Step Closer To Your Dreams!!!!</p>
  </div>
  <!-- Begin MailChimp Signup Form -->
  <div id="mc_embed_signup">
    <form action="inquire" method="post">
        @csrf
    <div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Your Name:" ,\App::getLocale())}}</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Your Contact No:" ,\App::getLocale())}}</label>
            <input type="text" name="mobile" id="mobile" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Your Email:" ,\App::getLocale())}}</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        {{-- <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Your Contact No:" ,\App::getLocale())}}</label>
            <input type="text" name="title" id="title" class="form-control">
        </div> --}}
        
        
        
        <div class="submit-ticket">
            <button type="submit" class="btn btn-primary">{{GoogleTranslate::trans("Submit" ,\App::getLocale())}}</button>
            {{-- <button type="button" class="btn btn-dark">Back</button> --}}
        </div>
    </div>
</form>
  </div>
  <!-- End MailChimp Signup Form -->
</div>

        <script>
            $(document).ready(function ()
{
	//Fade in delay for the background overlay (control timing here)
	$("#bkgOverlay").delay(4800).fadeIn(400);
  //Fade in delay for the popup (control timing here)
	$("#delayedPopup").delay(5000).fadeIn(400);
	
	//Hide dialouge and background when the user clicks the close button
	$("#btnClose").click(function (e)
	{
		HideDialog();
		e.preventDefault();
	});
});
//Controls how the modal popup is closed with the close button
function HideDialog()
{
	$("#bkgOverlay").fadeOut(400);
	$("#delayedPopup").fadeOut(500);
}

        </script>

<div class="header-fixed-three header-fixed">

<nav class="navbar navbar-expand-lg header-nav-three scroll-sticky">

<div class="container">


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

<img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>

<ul class="main-nav">
    
    {{-- <ul class="nav header-navbar-rht"> --}}

    @foreach ($navbars as $navbar)
<li class="has-submenu active">
    {{-- <h3>{{ GoogleTranslate::trans('Welcome To ERA CIVIL SERVICE',\App::getLocale()) }}</h3> --}}
    {{-- <p>{{ GoogleTranslate::trans("$course->name" ,\App::getLocale())}}</p> --}}

        <a href="/{{$navbar->navbar}}">{{GoogleTranslate::trans("$navbar->navbar" ,\App::getLocale()) }}</a>
        
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
        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown">
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
            <a class="dropdown-item" href="/profile"><i class="feather-user me-1"></i> Profile</a>
            <a class="dropdown-item" href="/logout"><i class="feather-log-out me-1"></i> Logout</a>
        </div>
    </li>
    @endguest
</ul>

</div>
<ul class="nav header-navbar-rht">
    
</ul>
<div class="col-md-1">
    <select class="form-select changeLanguage">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
        <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : ''}}>Hindi</option>
        <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : ''}}>Gujarati</option>
    </select>
</div>

</div>

</nav>

</div>

</header>



<section class="home-three-slide d-flex align-items-center">
    
    <div class="container">
        
        <div class="row ">
            
            
            <div class="col-xl-6 col-lg-8 col-md-12 col-12" data-aos="fade-down">
                
                <div class="home-three-slide-face">
                    
                    <div class="home-three-slide-text">
        
      
    <h5>{{GoogleTranslate::trans("$welcomeinformations->slogan" ,\App::getLocale())}}</h5>

    <h1>{{GoogleTranslate::trans("$welcomeinformations->heading" ,\App::getLocale())}}</h1>

    <p>{{GoogleTranslate::trans("$welcomeinformations->sub_heading" ,\App::getLocale())}}</p>
    <p>{{GoogleTranslate::trans("$welcomeinformations->extra_information" ,\App::getLocale())}}</p>
    
    </div>

    
    </div>

    </div>

    <div class="col-xl-6 col-lg-4 col-md-6 col-12" data-aos="fade-up">

    <div class="girl-slide-img aos">

    <img class="img-fluid" src="/storage/{{$welcomeinformations->image}}" alt="">

    </div>

    </div>

    </div>

    </div>

    </section>


    <section class="section student-course home-three-course">

        <div class="container">


        <div class="course-widget-three">

        <div class="row">

            
            <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                <a href="/courses">
            <div class="course-details-three">
            <div class="align-items-center">
            <div class="course-count-three course-count ms-0">
            <div class="course-img">
            <img class="img-fluid" src="{{asset('assets/img/icon-three/course-01.svg')}}" alt="">
            </div>
            <div class="course-content-three">
            <h4 class="text-blue"><span class="counterUp">{{$coursescount}}</h4>
            <p>{{GoogleTranslate::trans("Online Courses" ,\App::getLocale())}}</p>
            </div>
            </div>
            </div>
            </div>
        </a>
            </div>

        
        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
            <a href="/mentors">

        <div class="course-details-three">
        <div class="align-items-center">
        <div class="course-count-three course-count ms-0">
        <div class="course-img">
        <img class="img-fluid" src="{{asset('assets/img/icon-three/course-02.svg')}}" alt="">
        </div>
        <div class="course-content-three">
        <h4 class="text-yellow"><span class="counterUp">{{$teacherscount}}</h4>
        <p>{{GoogleTranslate::trans("Expert Tutors" ,\App::getLocale())}}</p>
        </div>
        </div>
        </div>
        </div>
            </a>

        </div>

        

         <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
            <a href="/reviews">

        <div class="course-details-three mb-0">
        <div class="align-items-center">
        <div class="course-count-three">
        <div class="course-img">
        <img class="img-fluid" src="{{asset('assets/img/icon-three/course-04.svg')}}" alt="">
        </div>
        <div class="course-content-three course-count ms-0">
        <h4 class="text-green"><span class="counterUp">{{$studentscount}}</h4>
        <p>{{GoogleTranslate::trans("Online Students" ,\App::getLocale())}}</p>
        </div>
        </div>
        </div>
        </div>
           </a>

        </div>

        </div>
        </div>
        </div>

    </section>

        <div class="page-content">

            <div class="container">

            <div class="row">

            <div class="col-lg-12">

                <div class="home-three-head section-header-title" data-aos="fade-up">

                    <div class="row align-items-center d-flex justify-content-between">
        
                    <div class="col-lg-6 col-sm-8">
        
                    <h2>{{GoogleTranslate::trans("Toppers" ,\App::getLocale())}}</h2>
        
                    </div>
        
                    
                    </div>
        
                    </div>
                
               


            
            <div class="row">

            @foreach ($toppers as $topper)
                    
            <div class="col-lg-3 col-md-6 d-flex">
            <div class="student-box flex-fill">
            <div class="student-img">
            {{-- <a href="student-profile"> --}}
            <img class="img-fluid" alt="Students Info" src="/storage/{{$topper->image}}">
            {{-- </a> --}}
            </div>
            <div class="student-content pb-0">
            <h5><a href="/toppers">{{GoogleTranslate::trans("$topper->name" ,\App::getLocale())}}</a></h5>
            <h5>{{GoogleTranslate::trans("$topper->year" ,\App::getLocale())}}</h5>
            
            </div>
            </div>
            </div>

            @endforeach

            </div>
            
            
            
            </div>
            </div>
            </div>
        </div>



        <section class="home-three-courses">

            <div class="container">

            <div class="favourite-course-sec">

            <div class="row">


            <div class="home-three-head section-header-title" data-aos="fade-up">

            <div class="row align-items-center d-flex justify-content-between">

            <div class="col-lg-6 col-sm-8">

            <h2>{{GoogleTranslate::trans("Courses" ,\App::getLocale())}}</h2>

            </div>

            
            </div>

            </div>




            <div class="all-corses-main">
            <div class="tab-content">
            <div class="tab-content">


            
            <div class="tab-pane fade active show" id="alltab" role="tabpanel">
            <div class="all-course">
            <div class="row">

                @foreach ($courses as $course)
                    
                

            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
            <div class="course-box-three">
            <div class="course-three-item">
            <div class="course-three-img">
            <a href="/courses/{{$course->name}}">
            <img class="img-fluid" alt="" src="/storage/{{$course->image}}">
            </a>
           
            </div>
            <div class="course-three-content">
            <div class="course-group-three">
            
            </div>
            <div class="course-three-text">
            <a href="/courses/{{$course->name}}">
            <p>{{GoogleTranslate::trans("$course->name" ,\App::getLocale())}}</p>
            <h3 class="title instructor-text">{{GoogleTranslate::trans("$course->description" ,\App::getLocale())}}</h3>
            </a>
            </div>
            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
            <div class="price-three-view d-flex align-items-center">
            <div class="course-price-three">
            <h3>₹{{GoogleTranslate::trans("$course->price" ,\App::getLocale())}}</span></h3>
            </div>
            </div>
            
            </div>
            </div>
            </div>
            </div>
            </div>

            @endforeach
            
            </div>
            </div>
            </div>
            
            
            </div>
            </div>
         </div>

            </div>
            </div>
            </div>
            </section>

            

            <div class="feature-instructors-sec">
                <div class="container">

                    <div class="home-three-head section-header-title" data-aos="fade-up">

                        <div class="row align-items-center d-flex justify-content-between">
            
                        <div class="col-lg-6 col-sm-8">
            
                        <h2>{{GoogleTranslate::trans("Featured Instructor" ,\App::getLocale())}}</h2>
            
                        </div>
            
                        
                        </div>
            
                     </div>
                
                <div class="featured-instructor-two">
                <div class="row">


                    @foreach ($teachers as $teacher)
                        
                    

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                <div class="instructors-widget">
                <div class="instructors-img">
                {{-- <a href="instructor-list"> --}}
                <img class="img-fluid" alt="" src="/storage/{{$teacher->image}}">
                {{-- </a> --}}
                <div class="featured-border">
                {{-- <div class="featured-img ">
                <img src="/storage/{{$teacher->image}}" alt="" class="img-fluid">
                </div> --}}
                </div>
                </div>
                <div class="course-details-two">
                <div class="instructors-content text-center">
                <h5>{{GoogleTranslate::trans("$teacher->name" ,\App::getLocale())}}</h5>
                <p>{{GoogleTranslate::trans("$teacher->subject" ,\App::getLocale())}}</p>
                </div>
                <div class="course-info"></div>
                {{-- <div class="student-count d-flex justify-content-center">
                <i class="fa-solid fa-user-group"></i>
                <span>50 Students</span>
                </div> --}}
                </div>
                </div>
                </div>

                @endforeach


                </div>
                </div>
                
                
               
                
                </div>
                </div>


<section class="real-reviews-sec">
    <div class="container">

        <div class="home-three-head section-header-title" data-aos="fade-up">

            <div class="row align-items-center d-flex justify-content-between">

            <div class="col-lg-6 col-sm-8">

            <h2>{{GoogleTranslate::trans("About Us" ,\App::getLocale())}}</h2>

            </div>

            
            </div>

         </div>


    <div class="real-reviews-group">

    <div class="row align-items-center">

    <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up">

    <div class="reviews-img">

    <img src="/storage/{{$about->image}}" alt="" class="img-fluid">

    </div>

    </div>

    <div class="col-lg-6 col-md-12 col-md-12" data-aos="fade-up">

    {{-- <div class="owl-carousel real-reviews owl-theme"> --}}

    <div class="item">

    <div class="real-reviews-grid">

    <div class="review-content">

    <h3>{{GoogleTranslate::trans("$about->title" ,\App::getLocale())}}</h3>
    <p>{!!$about->description!!}</p>
    </div>

    

    </div>

    </div>

    

    </div>/
    
    </div>
    </div>
    </div>
    
    

    </div>
    
    </section>
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
        <p>{{GoogleTranslate::trans("$footer->address" ,\App::getLocale())}}</p>
        </div>
        <p class="mb-0">
        <span class="phone-icon"><i class="fa-solid fa-phone-volume"></i></span>
        {{GoogleTranslate::trans("$footer->mobile" ,\App::getLocale())}}
        </p>
        <p class="mb-0">
        <span class="email-icon"><i class="fa-solid fa-phone-volume"></i></span>
        {{GoogleTranslate::trans("$footer->email" ,\App::getLocale())}}
        </p>
        </div>
        </div>
        
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-12">

            <a href="/">
                <img src="/storage/{{$logos->logo}}" class="img-fluid" alt="Footer Logo">
                </a>
        
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
        <p>{{GoogleTranslate::trans("$footer->information" ,\App::getLocale())}}</p>
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
    
    <script>
        $('.changeLanguage').change(function(event){
            var url = "{{ route('google.translate.change') }}";
            window.location.href = url+"?lang="+$(this).val()
        })
        </script>
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
    </body>
    
    </html>