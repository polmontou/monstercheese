<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $product_name)
    {
        return view('products.product-show',['product_name'=>$product_name]);

    }
}
