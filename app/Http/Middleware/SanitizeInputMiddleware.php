<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SanitizeInputMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //clean $request->message
        $request->merge([
            'message' => $this->cleanMessage($request->message)
        ]);

        return $next($request);
    }


    private  function cleanMessage($message)
    {


        $message = strip_tags($message);
        $message = trim($message);
        $message = stripslashes($message);

        return $message;
    }
}
