<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Logo;
use App\Models\Answer;
use App\Models\CourseDetail;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Question;
use App\Models\ExamStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function index($id)
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $exams = Exam::where('course_details_id','=',"$id")->get();

        $coursedetail = CourseDetail::where('id','=',"$id",'AND' ,'visible','=','1')->orderBy('created_at','Desc')
        ->first(['id','name','sub_name','heading','description','small_description','image']);
        
        return view('exam',compact('exams','coursedetail','navbars','logos','footer'));
    }


    public function exam($id)
    {

        
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $questions = Question::where('exam_id','=',"$id")->get();
            $questionid = $id;
            $resultid = Auth::user()->id;

        
        return view('exams',compact('questions','questionid','resultid','navbars','logos','footer'));
    }

    public function show(Question $question,$id){
        $questiondata = Question::where('exam_id','=',"$id")->get();
        
        echo $questiondata;
    }

    public function save(Request $request,Answer $answer)
    {
        $abc = Auth::user()->id;

        $answer->exam_id=$request->exam_id;
        $answer->user_id=$abc;
        $answer->question_id=$request->question_id;
        $answer->answer=$request->choice;
        $answer->save();


        $correct = 0;
                $db_answers = Question::where('exam_id',$answer->exam_id)->get();
                foreach ($db_answers as $db_answer){
                                if ($db_answer->answer==$request->choice){
                                    $correct++;
                                    
                                }
                                else{
                                }
                            }       
                            
                            
                            $examstudent = ExamStudent::where('user_id', $abc)
            ->where('exam_id', '=', $request->exam_id)
            ->first();
        if($examstudent == null)
        {
            $quiz = ExamStudent::create([
            'user_id'=>$abc,
            'exam_id'=>$answer->exam_id,
            'score'=>$correct,

            ]); 
        }
        else 
        {
            $oldscore=ExamStudent::where('user_id',$abc)->where('exam_id','=',$request->exam_id)->first();
            $oldscore->score = $oldscore->score + $correct;
            $oldscore->save();
                  
            

        }
    }
    public function result(){
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $userid = Auth::user()->id;
        $result=ExamStudent::where('user_id','=',"$userid")->get();
        
return view('result',compact('userid','result','navbars','logos','footer'));
    }

    public function score($id){
        
        $scoredata=ExamStudent::where('user_id','=',"$id")->get();
        echo $scoredata;
    }

}
