<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function show($id)
    {
     
        $product = Product::where('id', $id)->get();

        return view('products.product-show', [
            'product'=> $product,
            'page_title'=> $product[0]->name
        ]);
    }
}
