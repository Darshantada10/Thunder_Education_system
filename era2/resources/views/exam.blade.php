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
    
<section class="course-content">
    <div class="container">
        <div class="row">
        <div class="col-lg-9">
            <div class="row">


                @foreach ($exams as $exam)
                    
                

                <div class="col-lg-12 col-md-12 d-flex">
                    <div class="course-box course-design list-course d-flex">
                        <div class="product">
                            <div class="product-img">
                                <a href="/course-details">
                                    <img class="img-fluid" alt="" src="/storage/{{$exam->image}}">
                                </a>
                                
                            </div>


                            <div class="product-content">
                                <div class="head-course-title">
                                    <h3 class="title"><a href="/course-details">{{GoogleTranslate::trans("$exam->title" ,\App::getLocale())}}</a></h3>
                                    <div class="all-btn all-category d-flex align-items-center">
                                        <a href="/exam/{{$exam->id}}" class="btn btn-primary">TEST</a>
                                    </div>
                                </div>
                                <div class="course-info border-bottom-0 pb-0 d-flex align-items-center">
                                    <p>{{GoogleTranslate::trans("$exam->description" ,\App::getLocale())}}</p>
                                </div>
                                    <div class="course-info border-bottom-0 pb-0 d-flex align-items-center">

                                    {{-- <div class="course-view d-flex align-items-center">
                                        <img src="assets/img/icon/icon-02.svg" alt="">
                                        <p>9hr 30min</p>
                                    </div> --}}

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


</section>
@endsection