<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {      
        if(Auth::check()){
            if(Auth::user()->id == null){

            // $userid = Auth::user()->id;
            
            return redirect('/login')->with('message','Please Login First');
        }
        
    }else{
        return redirect('/login')->with('message','Please Login First');

    }

    return $next($request);
    }
}
