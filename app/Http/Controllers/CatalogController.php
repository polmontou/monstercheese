<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller {

 


    public function displayCatalog(Request $request){

        $sortby= $request->query('sortby','id');
        $sortdir = $request->query('sortdir', 'asc');


        $products = Product::orderBy($sortby, $sortdir)->get();
        return view('products.catalog', ['products'=>$products]);
    }
    
}