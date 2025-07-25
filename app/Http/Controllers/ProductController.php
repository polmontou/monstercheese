<?php

namespace App\Http\Controllers;
/* use Illuminate\Support\Facades\DB; */

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(string $productId)
    {
        $products = Product::all();
        $productOrderAlph = Product::orderBy('name','desc')->get();
        $productOrderPrice = Product::orderBy('price')->get();
        $product = Product::where('id', '=', $productId)->get();
        return view('/products.product-show', 
            ['products' => $products, 
            'product' => $product,
            'productOrderAlph'=>$productOrderAlph,
            'productOrderPrice'=>$productOrderPrice
        ]);
    }
}
