<?php

namespace App\Http\Middleware;

use Closure;

class ActiveMiddleware
{
    public function handle($request, Closure $next)
    {

        if (auth()->user()->status == 1){

            return $next($request);

        }

        else {

            return redirect()->back();
        }
    }
}
