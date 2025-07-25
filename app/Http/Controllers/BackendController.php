<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function productAdmin()
    {

        $products = Product::all();
        return view('backoffice', [
            'products' => $products,]);
    }

    public function RemoveProduct(string $productToRemove)
    {
        $removeProduct = Product::where('name', '=', $productToRemove);
        return view('backoffice',['removeProduct'=>$removeProduct]);
    }
}
