<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show(string $id)
    {
        $product = DB::select("select * from products where id = $id");
        return view('products.product-show',['product'=>$product]);

    }
}
