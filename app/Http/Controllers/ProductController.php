<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $productId)
    {
        $products = DB::select('select * from products');
        $product = DB::table('products')->where('id','=', $productId)->get();
        return view('/products.product-show', ['products'=>$products, 'product' => $product ]);
    }

}
