@extends('app2')

@section('content')


{{-- <h1>heyyyy</h1> --}}

{{-- @foreach ($questions as $item)
    <p>{{$item->question}} </p>
    <p>{{$item->choice1}} </p>
    <p>{{$item->choice2}} </p>
    <p>{{$item->choice3}} </p>
    <p>{{$item->choice4}} </p>
@endforeach --}}
{{-- @foreach ($questionid as $item) --}}
    {{-- <p>{{$questionid}}</p> --}}

{{-- @endforeach --}}
<section class="course-content checkout-widget">
<div class="container">
<div class="row">
    <div class="col-lg-3"></div>
<div class="col-lg-6">

<div class="student-widget pay-method">
    <div class="student-widget-group add-course-info" id="question">
        {{-- <form method="post" onsubmit="saveanswer()">
        <center>
            <div class="cart-head">
                <h4>Question</h4>
            </div>
        </center>
        <div class="checkout-form" >
            
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wallet-method ">
                        <!-- <center>  -->
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="optradio" checked="">
                                    <span class="checkmark"></span>Option1
                            </label>
                            <br>
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="optradio">
                                    <span class="checkmark"></span> Option2
                            </label>
                            <br>
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="optradio">
                                    <span class="checkmark"></span> option3
                            </label>
                            <br>
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="optradio">
                                    <span class="checkmark"></span> option4
                            </label>
                        <!-- </center> -->
                        </div>
                        <center>
                        <div class="payment-btn">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </center>
                    </div>
                    
                </div>
            
        </div> --}}

    {{-- </form> --}}
</div>
</div>
</div>

</div>
</div>
</section>

<script>
    var count=1;
    function show(qid){
        console.log("called show",qid);
        
    fetch("http://localhost:8000/api/questions/{{$questionid}}").then(response=>response.json()).then((res)=>{
        // console.log(r)
    console.log("test",res);
    question="";
    if (qid == undefined) {
        count = count
        console.log("called if");

    } else {
        count = qid
        console.log("called else");

    }
    if (count <= res.length) {

        res.forEach(element => {
            console.log("element.id",element.id);
            // console.log("res",res.length);
            console.log("-------",res[count-1].id)
        console.log("count",count);
        if(element.id==res[count-1].id){
        
             question=` <form method="post" id="questionform">
                @csrf
                    <center>
                        <div class="cart-head">
                            <h4>${element.question}</h4>
                        </div>
                    </center>
                 <div class="checkout-form" >
            
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wallet-method ">
                        <!-- <center>  -->
                            <input type="hidden" name="question_id" value="${element.id}">
                            <input type="hidden" name="exam_id" value="${element.exam_id}">
                           

                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="choice" id="choice1" value="${element.choice1}" value={{old('choice')}}>
                                    <span class="checkmark"></span>${element.choice1}
                            </label>
                            <br>
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="choice" id="choice2" value="${element.choice2}" value={{old('choice')}}>
                                    <span class="checkmark"></span> ${element.choice2}
                            </label>
                            <br>
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="choice" id="choice3" value="${element.choice3}" value={{old('choice')}}>
                                    <span class="checkmark"></span>${element.choice3} 
                            </label>
                            <br>
                            <label class="radio-inline custom_radio me-4">
                                <input type="radio" name="choice" id="choice4" value="${element.choice4}" value={{old('choice')}}>
                                    <span class="checkmark"></span> ${element.choice4}
                            </label>
                        <!-- </center> -->
                        </div>
                        <center>
                        <div class="payment-btn">
                            <button class="btn btn-primary" type="submit" id="myButton" onclick="savedata()">Next</button>
                        </div>
                    </center>
                    </div>
                    
                </div>
            
        </div>
    </form>`       
                    
        }
    });
    console.log(question);
    document.getElementById('question').innerHTML=question;
} else {
        // document.getElementById('question').innerHTML="Test Over";
        window.location.href="/result";    
        
    }
    
 }) 
}
show()
// let count = 1;
const button = document.getElementById("myButton");

// button.onclick("click", () => {
//   button.id = "myButton" + count;
// });

function savedata(){
    event.preventDefault();
    let FormData=$("#questionform").serializeArray();
     //console.log(FormData);
    var result={};
    $.each(FormData,function(){
        result[this.name]=this.value;
    })
    console.log(result);
    let header_post={
        method:"POST",
        body :JSON.stringify(result)
    }
    // fetch("http://localhost:8000/api/submitanswer",header_post).then(response=>response.json()).then((res)=>{
    //     console.log(res);
    // })
    $.ajax({
                url: "{{ route('question.save') }}",
                type: "POST",
                data: result,
                success: function(data) {
                    console.log(data);
                    show(count+1)
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        
}
  
    </script>

    @endsection