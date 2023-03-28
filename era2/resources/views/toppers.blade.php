@extends('app2')


@section('content')
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
    <h5><a href="student-profile">{{GoogleTranslate::trans("$topper->name" ,\App::getLocale())}}</a></h5>
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

@endsection