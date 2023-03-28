@extends('app2')

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="filter-grp ticket-grp tiket-suport d-flex align-items-center justify-content-between">
                    <div>
                        <h3>{{GoogleTranslate::trans("Leave A Heartfelt Note" ,\App::getLocale())}}</h3>
                    </div>
                    <div class="ticket-btn-grp">
                        <a href="/reviews">{{GoogleTranslate::trans("Back to Reviews" ,\App::getLocale())}}</a>
                    </div>
                </div>


                <div class="settings-widget">
                    <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
                        <div class="comman-space">
                            {{-- <h4>Create New Discussion </h4> --}}
                            <form action="" method="post">
                                    @csrf
                                <div>
                                    {{-- <div class="form-group">
                                        <label class="form-control-label"></label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div> --}}
                                    
                                    <div class="form-group">
                                        <label class="add-course-label">{{GoogleTranslate::trans("Reviews" ,\App::getLocale())}}</label>
                                        <textarea class="form-control" name="reviews" id="reviews" cols="140" rows="1"></textarea>
                                    </div>
                                    
                                    <div class="submit-ticket">
                                        <button type="submit" class="btn btn-primary">{{GoogleTranslate::trans("Submit" ,\App::getLocale())}}</button>
                                        {{-- <button type="button" class="btn btn-dark">Back</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>  
{{-- <section class="page-content course-sec">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">

<div class="card review-sec">
    <div class="card-body">
    <h5 class="subs-title">Leave A Heartfelt Note</h5>
    <div class="instructor-wrap">
    <div class="about-instructor">
    <div class="abt-instructor-img">
    <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt="img" class="img-fluid"></a>
    </div>
    <div class="instructor-detail">
    <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
    <p>UX/UI Designer</p>
    </div>
    </div>
    
    </div>
    <p class="rev-info">“ This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first. The sound and video quality is of a good standard. Thank you Cristian. “</p>
    </div>
    </div>

    </div>
    </div>
    </div>
</section> --}}

@endsection