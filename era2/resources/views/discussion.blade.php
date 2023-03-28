@extends('app2')

@section('content')
    <section class="page-content course-sec course-message">
        <div class="container">
            <div class="student-widget message-student-widget">
                <div class="student-widget-group">
                    <div class="col-md-12">
                        <div class="add-compose">
                            <a href="/new-discussion" class="btn btn-primary"><i class="fa-solid fa-plus"></i>{{
GoogleTranslate::trans("New Discussion" ,\App::getLocale())}} 
                                </a>






                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="chat-window">

                            <div class="chat-cont-left">
                                <div class="chat-users-list">
                                    <div class="chat-scroll">

                                        @foreach ($discussions as $discussion)
                                            <a href="#{{ $discussion->id }}" class="media d-flex"
                                                onclick="showHTML({{ $discussion->id }})">
                                                
                                                <div class="media-img-wrap flex-shrink-0">
                                                    <div class="avatar avatar-away">
                                                        <img src="/storage/{{ $logos->logo }}" alt="User Image"
                                                            class="avatar-img rounded-circle">
                                                    </div>
                                                </div>

                                                <div class="media-body flex-grow-1">
                                                    <div>
                                                        <div class="user-name">{{ GoogleTranslate::trans("$discussion->title " ,\App::getLocale())}}</div>
                                                        <div class="user-last-chat">{{GoogleTranslate::trans(" $discussion->description " ,\App::getLocale())}}</div>

                                                    </div>
                                                    {{-- <div class="badge-active">
        <div class="badge bgg-yellow badge-pill">1</div>
        </div> --}}
                                                </div>
                                            </a>
                                        @endforeach


                                    </div>
                                </div>
                            </div>


                            <div class="chat-cont-right" id="discussions">
                                
                                <form action="" method="POST" id="savediscussion">
                                    @csrf
                                <div class="chat-header" >
                                    <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                    <i class="material-icons">chevron_left</i>
                                    </a>
                                    <div class="media d-flex">
                                    <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                    <img src="/storage/{{ $logos->logo }}" alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    </div>
                                    <div class="media-body flex-grow-1">
                                    <div class="user-name"></div>
                                    <div class="user-status"></div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="chat-body" >
                                        <div class="chat-scroll">
                                            <ul class="list-unstyled">
                                        
                                                <li class="media received d-flex">
                                            <div class="media-body flex-grow-1" id="test">

                                           {{-- this is an api called space --}}
                                
                                        </div>
                            </div>
                            </li>
                        
                        </ul>
                            </div>
                            <div class="chat-footer">
                                <div class="input-group">
                                <div class="btn-file btn">
                                {{-- <i class="fa fa-paperclip"></i> --}}
                                {{-- <input type="file"> --}}
                                </div>

                                <input type="text" name="message" id="message"
                                 class="input-msg-send form-control" placeholder="Type your message here...">
                                
                                <button type="submit" onclick="savedata()" class="btn btn-primary msg-send-btn rounded-pill">
                                    <img src="assets/img/send-icon.svg" alt="">
                                </button>
                                </div>
                                
                                </div>

                            </div>
                        {{-- </form> --}}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
    // showHTML(3)
//     let request = new XMLHttpRequest();

// request.open('GET', window.url, true);

// request.onload = function() {
//   if (request.status >= 200 && request.status < 400) {
//     let data = JSON.parse(request.responseText);
//     showHTML(data);
//   } else {
//     console.error('Error retrieving data');
//   }
// };
// window.location.protocol + '//' + window.location.hostname + window.location.pathname + window.location.hash === window.location.href;
// console.log(window.location.href);
const splitted = window.location.href.split("#");
console.log(splitted[1]);
showHTML(splitted[1])
        function showHTML(id) {
            fetch("http://localhost:8000/api/discussion/" + id).then((res) => res.json()).then((response) => {
                console.log("checking", response);
                console.log("data",id);
                // abc = id;
                discuss = "";
                response.forEach(data => {
                    console.log("element.id", data.message)

                    discuss += ` 
               

                
                    

                    <input type="hidden" name="discussion_id" id="discussion_id" value="${data.discussion_id}">
                    <div class="abt-instructor-img">
<img src="/storage/{{$logos->logo}}" alt="img" class="img-fluid">
<div class="msg-box" >
    <div class="msg-bg">
        <p>${data.message}</p>
        </div>
        </div>
        </div>
    
    

</form>
                
                `
                });


                document.getElementById("test").innerHTML = discuss

                // $('#chat-cont-right').html(`
            // hey
            // `);
            })

        }
        // <td>${data.product_price}</td>
        // <td>${data.product_qunatity}</td>
        // <td> <button onclick="editprod(${data.id})">edit</button> </td>
        // function showHTML() {
        //   $('#chat-cont-right').html(`

    //   `);
        // }

        function savedata(){
    event.preventDefault();
    let FormData=$("#savediscussion").serializeArray();
     console.log(FormData);
    var result={};
    $.each(FormData,function(){
        result[this.name]=this.value;
    })
    console.log(result);
    // let header_post={
    //     method:"POST",
    //     body :JSON.stringify(result)
    // }
    // fetch("http://localhost:8000/api/submitanswer",header_post).then(response=>response.json()).then((res)=>{
    //     console.log(res);
    // })
    $.ajax({
                url: "{{ route('discussion.save') }}",
                type: "POST",
                data: result,
                success: function(data) {
                    console.log(data);
                    // show(count+1)
                    // window.location.href="/discussion"
                    location.reload();
                    // window.showHTML(data.id);
                    // console.log("hey");
                    // showHTML(data.id);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
            
        
}
    </script>
@endsection
