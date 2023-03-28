@extends('app2')
@section('content')
{{-- <section class="real-reviews-sec"> --}}
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

    <div class="owl-carousel real-reviews owl-theme">

    <div class="item">

    <div class="real-reviews-grid">

    <div class="review-content">

    <h3>{{GoogleTranslate::trans("$about->title" ,\App::getLocale())}}</h3>
    <p>{!!$about->description!!}</p>
    </div>

    

    </div>

    </div>

    

    </div>
    
    </div>
    </div>
    </div>
    
    

    </div>
    
    {{-- </section> --}}

    @endsection