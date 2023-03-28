@extends('app2')


@section('content')
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
    {{-- <div class="col-md-4">
        <select class="form-select changeLanguage">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
            <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : ''}}>Hindi</option>
            <option value="gu" {{ session()->get('locale') == 'gu' ? 'selected' : ''}}>Gujarati</option>
        </select>
    </div> --}}
    {{-- <h3>{{ GoogleTranslate::trans('Welcome To ERA CIVIL SERVICE',\App::getLocale()) }}</h3>
    <h3>{{ GoogleTranslate::trans('this is a language change demo',\App::getLocale()) }}</h3> --}}

    {{-- <script>
        $('.changeLanguage').change(function(event){
            var url = "{{ route('google.translate.change') }}";
            window.location.href = url+"?lang="+$(this).val()
        })
    </script> --}}

    <div class="all-corses-main">
    <div class="tab-content">
    <div class="tab-content">


    
    <div class="tab-pane fade active show" id="alltab" role="tabpanel">
    <div class="all-course">
    <div class="row">

        @foreach ($coursedetail as $course)
            
        

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
        
    <p>{{ GoogleTranslate::trans("$course->name" ,\App::getLocale())}}</p>
    {{-- <h3 class="title instructor-text">{{$course->description}}</h3> --}}
    {{-- <h3 class="title instructor-text">{{ GoogleTranslate::trans({{$course->description}} \App::getLocale())}}</h3> --}}

    </a>
    </div>
    <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
    <div class="price-three-view d-flex align-items-center">
    <div class="course-price-three">
    <h3>{{ GoogleTranslate::trans("$course->price" ,\App::getLocale())}}</span></h3>
    {{-- ₹ --}}
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

@endsection