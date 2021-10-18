<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if(auth()->check() && auth()->user()->userType == 'Admin'){
            return $next($request);
        }
        if(auth()->check() && auth()->user()->userType == $type){
            return $next($request);
        }
        if(!auth()->check()){
            return '/welcome';
        }

        return redirect('/')->withErrors([$type. 'erisiminiz yok.', 'Kullanici: '.auth()->user()->id]);

    }
}
