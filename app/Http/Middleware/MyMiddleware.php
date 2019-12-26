<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
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
        if(Auth::check())
        // if($request->has('diem') && $request['diem']>=5)
            return $next($request);
        else
        return redirect()->route('dangnhap');

        //return $next($request);
    }

    
}
