<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class Logger
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
        // Request received

        Log::info("Logging Starts");

        //echo "In Logger Middleware";

        $response = $next($request);

        Log::info($response);

        Log::info("Logging Ends");

        return $response;
    }
}
