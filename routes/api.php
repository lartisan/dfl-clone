<?php

use Illuminate\Support\Facades\Route;

Route::post('register', 'API\RegisterController@register');

// Route::middleware('auth:api')->group( function () {
Route::middleware('store')->group(function () {
    Route::apiResources([
        'users' => 'API\UserController',
        'categories' => 'API\CategoryController',
        'products' => 'API\ProductController',
        'brands' => 'API\BrandController',
    ]);
    Route::get('categories/{category}/{categoryList}', 'API\CategoryListController@show');
    Route::get('categories/{category}/products', 'API\CategoryProductsController@index');
});

Route::fallback(function () {
    return response()->json([
        'error' => true,
        'message' => 'Resource not found.',
    ], 404);
})->name('api.fallback.404');
