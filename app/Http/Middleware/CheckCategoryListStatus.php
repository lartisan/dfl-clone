<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class CheckCategoryListStatus
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
		if($request->route()->hasParameter('categoryList')) {
			if($request->route('categoryList')->isAvailable())
	        	return $next($request);

        return Route::respondWithRoute('api.fallback.404');
    }

		return $next($request);
    }
}
