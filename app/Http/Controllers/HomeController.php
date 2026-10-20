<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $products = Product::where('status', 'active')
            ->latest()
            ->take(6)
            ->get();

        $services = Service::where('status', 'active')
            ->latest()
            ->take(5)
            ->get();

        return view('home', compact(
            'categories',
            'products',
            'services'
        ));
    }
}
