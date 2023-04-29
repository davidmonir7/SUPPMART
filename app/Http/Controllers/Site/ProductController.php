<?php

namespace App\Http\Controllers\Site;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show ($id)
    {
    $products= Product::with(relations: 'images','category')->find($id);
    return view(view:'site.product.show ',data: compact(var_name:'products'));
    }
}
