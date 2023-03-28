@extends('app2')

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="filter-grp ticket-grp tiket-suport d-flex align-items-center justify-content-between">
                    <div>
                        <h3>{{GoogleTranslate::trans("New Discussion" ,\App::getLocale())}}</h3>
                    </div>
                    <div class="ticket-btn-grp">
                        <a href="/discussion">{{GoogleTranslate::trans("Back to Discussion" ,\App::getLocale())}}</a>
                    </div>
                </div>


                <div class="settings-widget">
                    <div class="settings-inner-blk add-course-info new-ticket-blk p-0">
                        <div class="comman-space">
                            <h4>{{GoogleTranslate::trans("Create New Discussion" ,\App::getLocale())}} </h4>
                            <form action="" method="post">
                                    @csrf
                                <div>
                                    <div class="form-group">
                                        <label class="form-control-label">{{GoogleTranslate::trans("Discussion Title" ,\App::getLocale())}}</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="add-course-label">{{GoogleTranslate::trans("Description" ,\App::getLocale())}}</label>
                                        <textarea class="form-control" name="description" id="description" cols="140" rows="4"></textarea>
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