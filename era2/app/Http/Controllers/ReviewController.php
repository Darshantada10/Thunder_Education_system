<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);
      
        $reviews=Review::select('reviews','user_id')->orderBy('created_at', 'Desc')->get();

        return view('reviews',compact('navbars','logos','footer','reviews'));
    }
    public function write()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);
      
        $reviews=Review::select('reviews','user_id')->orderBy('created_at', 'Desc')->get();

        return view('write-review',compact('navbars','logos','footer','reviews'));
    }
    public function save(Request $request)
    {       
        $user_id = Auth::user()->id;
        Review::create([
            'user_id'=>$user_id,
            'reviews'=>$request->reviews,
            ]); 
            return redirect('/reviews');
                // dd($abc);
    }
}
