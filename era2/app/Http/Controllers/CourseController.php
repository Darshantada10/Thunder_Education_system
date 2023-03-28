<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($name)
    {

        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $coursedetail = CourseDetail::where('name','=',"$name",'AND' ,'visible','=','1')->orderBy('created_at','Desc')
        ->first(['id','name','sub_name','heading','description','small_description','image']);


        return view('course',compact('coursedetail','navbars','logos','footer'));
    }

    public function course()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $coursedetail=CourseDetail::all();

        return view('courses',compact('navbars','logos','footer','coursedetail'));
    }
}
