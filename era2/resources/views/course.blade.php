@extends('app2')

@section('content')

<div class="inner-banner">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="instructor-wrap border-bottom-0 m-0">
    <div class="about-instructor align-items-center">
    <div class="abt-instructor-img">
    <img src="/storage/{{$coursedetail->image}}" alt="img" class="img-fluid">
    </div>
    <div class="instructor-detail me-3">
    <h5>{{GoogleTranslate::trans("$coursedetail->name" ,\App::getLocale())}}</h5>
    <p>{{GoogleTranslate::trans("$coursedetail->sub_name" ,\App::getLocale())}}</p>
    </div>
    {{-- <div class="rating mb-0">
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star"></i>
    <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
    </div> --}}
    </div>
    <span class="web-badge mb-3">{{GoogleTranslate::trans("$coursedetail->sub_name" ,\App::getLocale())}}</span>
    </div>
    <h2>{{GoogleTranslate::trans("$coursedetail->heading" ,\App::getLocale())}}</h2>
    <p>{{GoogleTranslate::trans("$coursedetail->small_description" ,\App::getLocale())}}</p>
    <div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
    {{-- <div class="cou-info">
    <img src="assets/img/icon/icon-01.svg" alt="">
    <p>12+ Lesson</p>
    </div>
    <div class="cou-info">
    <img src="assets/img/icon/timer-icon.svg" alt="">
    <p>9hr 30min</p>
    </div>
    <div class="cou-info">
    <img src="assets/img/icon/people.svg" alt="">
    <p>32 students enrolled</p>
    </div> --}}
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <section class="page-content course-sec">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    
    <div class="card overview-sec">
    <div class="card-body">
    <h5 class="subs-title">{{GoogleTranslate::trans("Overview" ,\App::getLocale())}}</h5>
    <h6>{{GoogleTranslate::trans("Course Description" ,\App::getLocale())}}</h6>
    <p>{{GoogleTranslate::trans("$coursedetail->description" ,\App::getLocale())}}</p>
    <div class="row">
    {{-- <div class="col-md-6">
    <ul>
    <li>Become a UX designer.</li>
    <li>You will be able to add UX designer to your CV</li>
    <li>Become a UI designer.</li>
    <li>Build & test a full website design.</li>
    <li>Build & test a full mobile app.</li>
    </ul>
    </div> --}}
    {{-- <div class="col-md-6">
    <ul>
    <li>Learn to design websites & mobile phone apps.</li>
    <li>You'll learn how to choose colors.</li>
    <li>Prototype your designs with interactions.</li>
    <li>Export production ready assets.</li>
    <li>All the techniques used by UX professionals</li>
    </ul>
    </div> --}}
    </div>
    {{-- <h6>Requirements</h6>
    <ul class="mb-0">
    <li>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</li>
    <li>No previous design experience is needed.</li>
    <li class="mb-0">No previous Adobe XD skills are needed.</li>
    </ul> --}}
    </div>
    </div>
    
    
    
    
    
    
    
   
    
    
    
    
    </div>
    <div class="col-lg-4">
    <div class="sidebar-sec">
    
    <div class="video-sec vid-bg">
    <div class="card">
    <div class="card-body">
    {{-- <a href="https://www.youtube.com/embed/1trvO6dqQUI" class="video-thumbnail" data-fancybox=""> --}}
    {{-- <div class="play-icon">
    <i class="fa-solid fa-play"></i>
    </div> --}}
    <img class="" src="/storage/{{$coursedetail->image}}" alt="">
    </a>
    <div class="video-details">
    {{-- <div class="course-fee">
    <h2>FREE</h2>
    <p><span>$99.00</span> 50% off</p>
    </div> --}}
    <div class="row gx-2">
        {{-- <div class="col-md-6">
            <a href="/exams/1" class="btn btn-wish w-100"><i class="feather-heart"></i> Test</a>
            </div>
            <div class="col-md-6">
            <a href="/materials" class="btn btn-wish w-100"><i class="feather-share-2"></i> Material</a>
            </div> --}}
    {{-- <div class="col-md-6">
    <a href="course-wishlist" class="btn btn-wish w-100"><i class="feather-heart"></i> Add to Wishlist</a>
    </div>
    <div class="col-md-6">
    <a href="javascript:;" class="btn btn-wish w-100"><i class="feather-share-2"></i> Share</a>
    </div> --}}
    </div>
    <a href="/exams/{{$coursedetail->id}}" class="btn btn-enroll w-100">{{GoogleTranslate::trans("Tests" ,\App::getLocale())}}</a>
    <a href="/material/{{$coursedetail->name}}" class="btn btn-enroll w-100">{{GoogleTranslate::trans("Material" ,\App::getLocale())}}</a>
    </div>
    </div>
    </div>
    </div>
    
    
   
    
    
    
    
    </div>
    </div>
    </div>
    </div>
    </section>
    
@endsection