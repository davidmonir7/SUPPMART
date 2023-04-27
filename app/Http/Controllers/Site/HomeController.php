<?php

namespace App\Http\Controllers\Site;


use index;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products= Product::orderBy('id','desc')->limit(5)->get();
     return view(view:'site.index ',data: compact(var_name:'products'));
     
    }

}
