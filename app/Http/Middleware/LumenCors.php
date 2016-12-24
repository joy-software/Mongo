<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 21/12/2016
 * Time: 10:27
 */

namespace App\Http\Middleware;
use Closure;

class LumenCors
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

        $response->header('Access-Control-Allow-Origin','*');

        return $response;
    }
}