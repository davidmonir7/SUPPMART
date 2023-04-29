<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;


use App\Models\product;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
   
    public function show($id)
    {
        $product = Product::with('images','category')->find($id);
        return view('site.product.show',compact('product'));
        
        
        
    }

}
