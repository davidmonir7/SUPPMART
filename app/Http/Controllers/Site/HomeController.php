<?php

namespace App\Http\Controllers\Site;



use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products= Product::orderBy('id','desc')->limit(5)->get();
     return view('site.index ',compact('products'));
     
    }

}
