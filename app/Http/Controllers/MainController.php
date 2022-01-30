<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        return view('categories');
    }

    public function category($category)
    {
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

    public function product($category, $name)
    {
        return view('product', ['category' => $category, 'name' => $name]);
    }
}
