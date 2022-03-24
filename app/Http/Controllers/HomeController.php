<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use App\Category;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(8)->get();

        // $categories = Category::with('children.children')->whereNull('parent_id')->get();
        $categories = Category::whereNull('parent_id')->get();


        // $products = Product::latest()->get();

        return view('home',compact('products','categories'));
    }
}
