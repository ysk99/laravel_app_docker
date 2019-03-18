<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        $response = $next($request);

        $http_origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : "";
        var_dump($http_origin);
        //if ($http_origin == "http://localhost:8080") {
            $response
                //->header("Access-Control-Allow-Origin" , $http_origin)
                ->header("Access-Control-Allow-Origin" , '*')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
                ->header('Access-Control-Allow-Headers', 'Content-Type');
                //->header('Access-Control-Allow-Credentials: true');
        //}

        return $response;

//        return $next($request)
//        ->header('Access-Control-Allow-Origin', '*')
//        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
//        ->header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Requested-With')
//        ->header('Access-Control-Allow-Credentials: true');
    }
}
