<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    
    public function index()
    {
        $mailData = [
            'title' => 'Mail from EraCivilServices.com',
            'body' => 'This is for testing email .'
        ];
         
        \Mail::to('theeracivilservices@gmail.com')->send(new WelcomeMail($mailData));
           
        dd("Email is sent successfully.");
    }
}