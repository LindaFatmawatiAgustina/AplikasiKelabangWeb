<?php

namespace App\Http\Middleware;

use Closure;

class DinaspuAuth
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
           $user = auth()->user();

        if(!$user->isDinaspu()){
            return redirect()->back();
        }
        return $next($request);
    }
}
