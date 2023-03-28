<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\Logo;
use App\Models\User;
use App\Models\About;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Inquire;
use App\Models\Student;
use App\Models\Toppers;
use App\Models\Teachers;
use App\Models\ExamStudent;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Models\WelcomeInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $welcomeinformations = WelcomeInformation::where('visible','=', '1')->orderBy('created_at', 'Desc')
        ->first(['heading','sub_heading','slogan','image','extra_information']);
        $toppers=Toppers::all();
        $courses=CourseDetail::all();
        $teacherscount=Teachers::get()->count();
        $coursescount=CourseDetail::get()->count();
        $studentscount=Student::get()->count();
        $teachers=Teachers::all();
        $about=About::where('visible','=','1')->orderBy('created_at','Desc')->first(['image','title','description']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);


    
        // $users=ExamStudent::where('user_id','=','5')->get();
        // $labels1=ExamStudent::where('user_id','=','5')->get();
        // dd($labels1['exam_id']);
        // $labels=Exam::where('id','=',$labels1[2]['exam_id'])->get('title');
        // dd($labels[0]['title']);


        return view('index',compact('navbars','logos','welcomeinformations','toppers',
        'teacherscount','coursescount','courses','studentscount','teachers','about','footer'));
    }
    public function inquire(Request $request)
    {
        $data = $request->all();
    $user=Inquire::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
    ]);
    return redirect('/home');
        // dd($user);
    }
    public function profile(Request $request)
    { 
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);
        $abc=Auth::user()->id;
        $mobile=Student::where('user_id','=',Auth::user()->id)->get();
        // dd($abc);
        // dd($mobile[0]['mobile']);
        $mobile=$mobile[0]['mobile'];
            return view('profile',compact('navbars','logos','footer','mobile'));
        // dd($user);
    }
    public function save(Request $request){

    //    $name= $request['name'];
    //     $email=$request['email'];
    //     $mobile=$request['mobile'];
    //     $request->validate([
    //         'avatar' => 'required|image',
    //     ]);
    
    //     $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
    //     $request->avatar->move(public_path('storage/users-avatar'), $avatarName);
    
    //     Auth()->user()->update(['avatar'=>$avatarName],['name'=>$request['name']],['email'=>$email],);
    
    //     return back()->with('success', 'Avatar updated successfully.');
        // dd($request);
// dd($_FILES);
if ($_FILES['avatar']['error']==0) {
    $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('storage/users-avatar'), $avatarName);
   $updateDetails = [
    'name' => $request['name'],
    'email' => $request['email'],
    // 'mobile' => $request['mobile'],
    // 'password' => $request['password'],
    'password' => Hash::make($request['password']),

    "avatar"=>$avatarName,

    
];
  }
  else{
      // $image = "default.jpg";
      $updateDetails = [
        'name' => $request['name'],
        'email' => $request['email'],
        // 'mobile' => $request['mobile'],
        'password' => Hash::make($request['password']),
    
        
    ];
    }
    // dd($avatarName);
        // $updateDetails = [
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => $request['password'],
            
        // ];
        User::where('id','=',Auth::user()->id)->update($updateDetails);
        return redirect('/profile');
    }

    // cdefbe9d api key
    // api secret 6KXp2xMaCCDp3MJG
}
