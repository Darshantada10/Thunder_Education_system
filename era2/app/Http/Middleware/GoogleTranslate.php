<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GoogleTranslate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {if (Session::has('locale')) {
            
        App::setLocale(Session::get('locale'));
    }
    else{
        
    }
        return $next($request);
    }
}
