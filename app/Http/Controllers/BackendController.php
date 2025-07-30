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

    public function formProduct(int $idProduct){
        $product=Product::where('id','=', $idProduct)->get();
        return view("/backoffice.product-edit", [
        'product'=>$product,
        ]);  
    }

    public function updateProduct(Request $request, int $idProduct){
        $validated=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'weight'=>'required|int',
            'picture'=>'required',
            'stock_quantity'=>'required|int',
            'category'=>'required',
            'available'=>'required'
        ]);

        Product::findOrFail($idProduct)->update($validated);

        return redirect()->route('backoffice/product-edit')->with('updated','Produit mis à jour');
    }

    /*public function RemoveProduct(string $productToRemove)
    {
        $removeProduct = Product::where('name', '=', $productToRemove);
        return view('backoffice',['removeProduct'=>$removeProduct]);
    }*/
}
