<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductController extends Controller
{
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.product-show',['product'=>$product]);

    }
}
