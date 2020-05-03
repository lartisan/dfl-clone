<?php

namespace App\Http\Controllers\API;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsCollection;
use App\Http\Controllers\API\BaseController as BaseController;

class CategoryProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        return new ProductsCollection(Product::whereCategoryId($category->id)->available()->paginate(10));
    }
}
