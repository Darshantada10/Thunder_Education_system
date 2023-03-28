<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Models\NewDiscussion;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class DiscussionController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);
    //   $abc=null;
        // $discussions=NewDiscussion::all();
        $discussions=NewDiscussion::select('title','description','user_id','id')->orderBy('created_at', 'Desc')->get();
        $id=null;



        // $url = Route::current()->getName();
        // $url=URL::full();
        // dd($url);
        // $cur_route = Route::current()->getName();

        // dd($cur_route);

        return view('discussion',compact('navbars','logos','footer','discussions','id'));
    }
    public function new()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        return view('new-discussion',compact('navbars','logos','footer'));
    }

    public function savediscussion(Request $request)
    {       
        $user_id = Auth::user()->id;
        $new=NewDiscussion::create([
            'user_id'=>$user_id,
            'title'=>$request->title,
            'description'=>$request->description,
            
        ]); 
        // dd($new->id);
        Discussion::create([
            'message'=>$request->description,
            'user_id'=>$user_id,
            'discussion_id'=>$new->id,
            ]);

            return redirect('/home');
                // dd($abc);
    }
    public function savediscussionmessage(Request $request)
    {       
        $user_id = Auth::user()->id;

        $abc = $request->discussion_id;
        Discussion::create([
            'user_id'=>$user_id,
            'discussion_id'=>$request->discussion_id,
            'message'=>$request->message,

            ]); 
            $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);
     
            $discussions=NewDiscussion::select('title','description','user_id','id')->orderBy('created_at', 'Desc')->get();

            return view('discussion',compact('abc','discussions','navbars','logos','footer'));
                // dd($abc);
    }

    public function get($id){
        $discussiondata = Discussion::where('discussion_id','=',"$id")->get();
        
        echo $discussiondata;
    }
}
