<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller {
    public function displayCatalog(Request $request){
        
        $sortby = $request->query("sortby", "id");
        $sortdir = $request->query("order", "asc");

        $products = Product::query()->sorted($sortby, $sortdir)->get();

        return view('products.catalog', ['products'=>$products]);
    }
    
}