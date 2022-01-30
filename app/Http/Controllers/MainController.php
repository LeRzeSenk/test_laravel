<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories',compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function basket()
    {
        return view('basket');
    }

    public function order()
    {
        return view('order');
    }

    public function product($category, $code)
    {
        $product = Product::where('code', $code)->first();
        return view('product', compact('product','category'));
    }
}
