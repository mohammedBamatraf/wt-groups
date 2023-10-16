<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check header request and determine localizaton
       $request->hasHeader('Accept-Language') ? $request->header('Accept-Language') : $request->headers->set('Accept-Language','en');
        app()->setLocale($request->header('Accept-Language') );


        return $next($request);
    }
}
