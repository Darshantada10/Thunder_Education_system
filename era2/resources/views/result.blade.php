@extends('app2')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
<div class="container">
    <div class="row ">
        <div class="col-md-7">
            <div class="home-slide-face aos" data-aos="fade-up">
                <div class="home-slide-text ">
        <div class="col-md-5 d-flex align-items-center">
            {{-- <div class="girl-slide-img aos" data-aos="fade-up"> --}}
                {{-- @if ($result->score >= 10)
                    <h3>
                        {{"very good you scored  '$result->score' is a nice result"}}
                    </h3>   
                    @else
                    {{"need to improve '$result->score' is not upto the mark"}}
                    @endif --}}
                    <canvas id="report-chart"></canvas>
               <div>
                   @foreach ($result as $result)
                   <h1>
                       
                       {{GoogleTranslate::trans("You Scored" ,\App::getLocale())}} {{$result->score}}
                    </h1>
                    @endforeach
                </div>     
    
{{-- </div> --}}
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    fetch("http://localhost:8000/api/score/{{$userid}}").then(response=>response.json()).then((res)=>{

        // console.log(res);
        console.log("test",res);

        const labels = res.map(examstudents => examstudents.exam_id);
        const scores = res.map(examstudents => examstudents.score);

        const ctx = document.getElementById('report-chart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'exam',
                    data: scores,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
                        
        });
       
  
    
</script>
{{-- @endforeach --}}
@endsection