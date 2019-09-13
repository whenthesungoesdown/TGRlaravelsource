<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Response;
use App\User;
class authenticatedmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if(Auth::check()){
        //    return Response::view('about');
        // }
               return $next($request);
    }
}
