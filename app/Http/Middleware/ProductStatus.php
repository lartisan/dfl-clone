<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class ProductStatus
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
		if($request->route()->hasParameter('product') && $request->route()->forgetParameter('category')) {
			if($request->route('product')->isAvailable())
	        	return $next($request);

            return Route::respondWithRoute('api.fallback.404');
        }

		return $next($request);
    }
}
