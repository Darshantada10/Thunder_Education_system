<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
{ $navbars = Navbar::all();
    $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
    $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);


    return view('registration',compact('navbars','logos','footer'));
}
    public function validate_registration(Request $request){

    
    

    $data = $request->all();
    $user=User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
    ]);
    Student::create([
        'name'=>$data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'user_id' => $user['id'],

    ]);
    return redirect('login')->with('success','Registration completed successfully');
}
}
