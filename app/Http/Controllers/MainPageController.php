<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainPageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('main', compact('products'));
    }

    public function cafes()
    {
        $products = Product::where('category', 'Cafe')->get();
        return view('products.cafes', compact('products'));
    }

    public function postres()
    {
        $products = Product::where('category', 'Postre')->get();
        return view('products.postres', compact('products'));
    }
}
