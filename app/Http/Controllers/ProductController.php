<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $product_name)
    {
        return view('product-detail',['product_name'=>$product_name]);
    }
}
