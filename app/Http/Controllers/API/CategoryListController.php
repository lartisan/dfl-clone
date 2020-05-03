<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\CategoryList;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryListResource;
use App\Http\Controllers\API\BaseController as BaseController;

class CategoryListController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
		return new CategoryListCollection(
			$category->lists()->available()->get()
		);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryList  $categoryList
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, CategoryList $categoryList)
    {
        return new CategoryListResource(
			$categoryList->load(['availableProducts.brand'])
		);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryList  $categoryList
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryList $categoryList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryList  $categoryList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryList $categoryList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryList  $categoryList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryList $categoryList)
    {
        //
    }
}
