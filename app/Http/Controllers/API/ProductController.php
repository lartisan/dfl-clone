<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Product;
use Illuminate\Http\Request;
// use App\Repositories\Repository;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use App\Http\Controllers\API\BaseController as BaseController;

class ProductController extends BaseController
{
	// protected $model;

	// public function __construct(Product $product)
	// {
    //    // set the model
	// 	$this->model = new Repository($product);
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return new ProductCollection(
			Product::available()->with('brand')->paginate(6)
			// $this->model->with(['brand'])->available()->paginate(6)
		);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProductRequest $request)
	{
		$product = Product::create($request->validated());

		return new ProductResource($product);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product)
	{
		return new ProductResource(
			$product->load(['brand', 'images', 'categoryList.category'])
			// $this->model->with(['brand', 'categoryList.category'])->available()->first()
		);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ProductRequest $request, Product $product)
	{
		$product->update($request->validated());

		return new ProductResource($product);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product)
	{
		$product->delete();

		return new ProductResource($product);
	}
}
