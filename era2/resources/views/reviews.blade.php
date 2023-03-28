@extends('app2')

@section('content')

<section class="testimonial-section-five">

    <div class="container">

        <a href="/write-review">
            
            <span class="web-badge mb-3">{{GoogleTranslate::trans("Write A Review" ,\App::getLocale())}}</span>
        </a>

    <div class="header-five-title text-center" data-aos="fade-down">
    <h2 class="text-warning">{{GoogleTranslate::trans("Testimonials" ,\App::getLocale())}}</h2>
    <p class="text-white">{{GoogleTranslate::trans("We are a very happy because we have a happy students" ,\App::getLocale())}} </p>
    </div>
    

    <div class="testimonial-slider-five">
    <div class="testimonial-five lazy slider">


        @foreach ($reviews as $review)
            
        
    <div class="testimonial-carousel">
    <div class="testimonial-item">
    <div class="testimonial-content-five">
    <div class="testimonial-text">
<p>{{$review->reviews}}</p>
    </div>
    <div class="testimonial-users-group d-flex align-items-center justify-content-between">
    <div class="testimonial-users">
    <h5>{{$review->user_id}}</h5>
    {{-- <p>Sales Manager</p> --}}
    </div>
    {{-- <div class="testimonial-ratings-five d-inline-flex align-items-center">
    <div class="rating">
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    </div>
    </div> --}}
    </div>
    </div>
    <div class="testimonial-image">
    <img src="assets/img/testimonial/testimonial-01.png" alt="">
     </div>
    </div>
    </div>
    @endforeach

    {{-- <div class="testimonial-carousel">
    <div class="testimonial-item">
    <div class="testimonial-content-five">
    <div class="testimonial-text">
    <p>"Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked. Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked."</p>
    </div>
    <div class="testimonial-users-group d-flex align-items-center justify-content-between">
    <div class="testimonial-users">
    <h5>Nikolas Brooten</h5>
    <p>Sales Manager</p>
    </div>
    <div class="testimonial-ratings-five d-inline-flex align-items-center">
    <div class="rating">
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="testimonial-image">
    <img src="assets/img/testimonial/testimonial-02.png" alt="">
    </div>
    </div>
    </div> --}}

    {{-- <div class="testimonial-carousel">
    <div class="testimonial-item">
    <div class="testimonial-content-five">
    <div class="testimonial-text">
    <p>"Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked. Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked."</p>
    </div>
    <div class="testimonial-users-group d-flex align-items-center justify-content-between">
    <div class="testimonial-users">
    <h5>Nikolas Brooten</h5>
    <p>Sales Manager</p>
    </div>
    <div class="testimonial-ratings-five d-inline-flex align-items-center">
    <div class="rating">
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="testimonial-image">
    <img src="assets/img/testimonial/testimonial-03.png" alt="">
    </div>
    </div>
    </div> --}}

    </div>
    </div>
    </div>
    </section>


@endsection