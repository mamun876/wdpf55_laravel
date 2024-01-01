<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class userAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    // Auth::attempt('email'=>$request->email);
    {
      
      if(auth()->user->role==2)
     {
        redirect('teacher');
        return $next($request);
     }
    if(auth()->user->role==3)
     {
        redirect('student');
        return $next($request);
     }
     return $next($request);
    }
}
