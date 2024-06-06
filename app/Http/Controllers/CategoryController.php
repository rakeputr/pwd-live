<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view("categories", [
            "categories" => $categories
        ]);
    }

    public function get(int $id)
    {
        $category = Category::where('CategoryID', $id)->firstOrFail();
        $products = Product::where('CategoryID', $id)->get();

        return view('show-product-by-category', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
