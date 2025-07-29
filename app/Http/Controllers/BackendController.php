<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function displayBackoffice(){
        return view('/backoffice/backoffice');
    }

    public function showAllProducts()
    {
        $products = Product::all();
        return view('/backoffice/products', [
            'products' => $products,]);

    }

    public function showProduct(int $idProduct)
    {
        $product=Product::where('id','=', $idProduct)->get();
        return view("/backoffice.product-detail", [
            'product'=>$product,
        ]);  
    }

    public function RemoveProduct(string $productToRemove)
    {
        $removeProduct = Product::where('name', '=', $productToRemove);
        return view('backoffice',['removeProduct'=>$removeProduct]);
    }
}
