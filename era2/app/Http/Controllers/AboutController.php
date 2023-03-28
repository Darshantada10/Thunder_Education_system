<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\About;
use App\Models\Footer;
use App\Models\Navbar;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $about=About::where('visible','=','1')->orderBy('created_at','Desc')->first(['image','title','description']);

        return view('about',compact('about','navbars','logos','footer'));
    }
}
