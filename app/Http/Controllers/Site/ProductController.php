<?php

namespace App\Http\Controllers\Site;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show ($id)
    {
    $products= Product::with( 'images','category')->find($id);
    return view(view:'site.product.show ',data: compact(var_name:'products'));
    }
}
