<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BackendController extends Controller
{
    public function displayBackoffice()
    {
        return view('/backoffice/backoffice');
    }

    public function showAllProducts()
    {
        $products = Product::all();
        return view('/backoffice/products', [
            'products' => $products,
        ]);
    }

    public function showProduct(int $idProduct)
    {
        $product = Product::where('id', '=', $idProduct)->get();
        return view("/backoffice.product-detail", [
            'product' => $product,
        ]);
    }

    public function formProduct(int $idProduct)
    {
        $product = Product::where('id', '=', $idProduct)->get();
        return view("/backoffice.product-edit", [
            'product' => $product,
        ]);
    }

    public function updateProduct(Request $request, int $idProduct): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|int',
            'picture',
            'stock_quantity' => 'required|int',
            'category' => 'required',
            'available' => 'required'
        ]);

        Product::findOrFail($idProduct)->update($validated);

        return redirect()->route('backoffice.products')->with('updated', 'Produit mis à jour');
    }

    public function formCreate()
    {
        return view('/backoffice/new-product');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|int',
            'picture',
            'stock_quantity' => 'required|int',
            'category' => 'required',
            'available' => 'required'
        ]);

        Product::create($validated);

        return redirect()->route('backoffice.products')->with('created', 'Produit mis à jour');
    }

    public function delete(int $idProduct)
    {
        Product::where('id', '=', $idProduct)->delete();
        return redirect()->route('backoffice.products')->with('deleted', 'Produit supprimé');
    }

}
