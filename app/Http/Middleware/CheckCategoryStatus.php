<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class CheckCategoryStatus
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
		if($request->route()->hasParameter('category')) {
			if($request->route('category')->isAvailable())
	        	return $next($request);

            return Route::respondWithRoute('api.fallback.404');
        }

		return $next($request);
    }
}
