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
    <h5>{{GoogleTranslate::trans("$coursedetail->namev" ,\App::getLocale())}}</h5>
    <p>{{GoogleTranslate::trans("$coursedetail->sub_namev" ,\App::getLocale())}}</p>
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
    <span class="web-badge mb-3">{{GoogleTranslate::trans("$coursedetail->sub_namev" ,\App::getLocale())}}</span>
    </div>
    <h2>{{GoogleTranslate::trans("$coursedetail->headingv" ,\App::getLocale())}}</h2>
    <p>{{GoogleTranslate::trans("$coursedetail->small_descriptionv" ,\App::getLocale())}}</p>
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
<div class="tab-content">
    <div class="tab-pane fade show active" id="graphics">
        <div class="row">

@foreach ($materials as $material)
    
<div class="col-lg-4 col-md-6">
    
                <div class="category-box">
                    <div class="category-title">
                        <div class="category-img">
                            <img src="/assets/img/category/category-01.jpg" alt="">
                        </div>
                        <h5>{{GoogleTranslate::trans("$material->topic" ,\App::getLocale())}}</h5>
                    </div>
                    <div class="cat-count">
                        <a href="/materials/{{$material->material}}" class="btn btn-enroll w-100">{{GoogleTranslate::trans("download" ,\App::getLocale())}}</a>
                    </div>
                </div>
                
            </div>
@endforeach
        </div>
    </div>
</div>


@endsection