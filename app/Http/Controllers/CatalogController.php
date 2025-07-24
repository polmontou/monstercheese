<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CatalogController extends Controller {
    public function displayCatalog(){
        $products = DB::select('select * from products where available = 1');
        return view('products.catalog', ['products'=>$products]);
    }
    
}