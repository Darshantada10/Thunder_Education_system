@extends('app2')

@section('content')
<div class="page-content">
    <div class="container">
    <div class="row">
    
    <div class="col-xl-3 col-md-4 theiaStickySidebar">
    <div class="settings-widget dash-profile mb-3">
    <div class="settings-menu p-0">
    <div class="profile-bg">
    {{-- <h5>Beginner</h5> --}}
    <img src="assets/img/profile-bg.jpg" alt="">
    <div class="profile-img">
    <a href="student-profile.html"><img src="/storage/users-avatar/{{Auth::user()->avatar}}" alt=""></a>
    </div>
    </div>
    <div class="profile-group">
    <div class="profile-name text-center">
    <h4><a href="student-profile.html">{{Auth::user()->name}}</a></h4>
    {{-- <p>Student</p> --}}
    </div>
    {{-- <div class="go-dashboard text-center">
    <a href="deposit-student-dashboard.html" class="btn btn-primary">Go to Dashboard</a>
    </div> --}}
    </div>
    </div>
    </div>

    
    </div>
    
    
    <div class="col-xl-9 col-md-8">
    <div class="settings-widget profile-details">
    <div class="settings-menu p-0">
    <div class="profile-heading">
    <h3>Profile Details</h3>
    </div>
    {{-- <div class="course-group mb-0 d-flex">
    <div class="course-group-img d-flex align-items-center">
    <a href="student-profile.html"><img src="/storage/users-avatar/{{Auth::user()->avatar}}" alt="" class="img-fluid"></a>
    
    </div>
    
    </div> --}}
    <div class="checkout-form personal-address add-course-info ">
    <div class="personal-info-head">
    <h4>Personal Details</h4>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
    <div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Name" ,\App::getLocale())}}</label>
            <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Email" ,\App::getLocale())}}</label>
            <input type="text" name="email" id="email" class="form-control" value="{{Auth::user()->email}}">
        </div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Mobile" ,\App::getLocale())}}</label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{$mobile}}">
        </div>
        
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("Password" ,\App::getLocale())}}</label>
            <input autocomplete="off" type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">{{GoogleTranslate::trans("image" ,\App::getLocale())}}</label>
            <img src="/storage/users-avatar/{{Auth::user()->avatar}}" height="100px" widht="100px"alt="">
            <input type="file" name="avatar" id="avatar" class="form-control" >
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
@endsection