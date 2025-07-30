<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BackofficeController extends Controller
{
    public function displayAddForm() {
        return view('backoffice.create');
    }
    public function displayBOCatalog(Request $request) {
        $sortby = $request->query("sortby", "id");
        $sortdir = $request->query("order", "asc");

        $products = Product::query()->sorted($sortby, $sortdir)->get();
        return view("backoffice.backoffice", ['products'=>$products]);
    }

    public function displayBOProduct(int $id) {
        $product = Product::find($id);
        return view('backoffice.product', ['product'=>$product]);
    }

    public function displayProductEditor(int $id) {
        $product = Product::find($id);
        return view('backoffice.edit', ['product'=>$product]);
    }

    public function updateProduct(Request $request, int $id): RedirectResponse {
        
        $validated = $request->validate([
            'name'=>'required',
            'description'=>'required|string',
            'price'=>'required|numeric|min:1',
            'weight'=>'required|int',
            'picture'=>'required',
            'stock_quantity'=>'required|int',
            'category_id'=>'required',
            'available'=>'required|boolean'
        ]);

        Product::findOrFail($id)->update($validated);
        
        return redirect()->route('backoffice.products')->with('updated', "Votre produit a bien été mis à jour!");
    }


    public function deleteProduct(int $id): RedirectResponse {
        $product = Product::findOrFail($id);
        $product->destroy($id);

        return redirect()->route("backoffice.products")->with("deleted","Votre produit a bien été supprimé!");
    }

    public function createProduct(Request $request): RedirectResponse{
        $validated = $request->validate([
            'name'=>'required|string|unique:products,name',
            'description'=>'required',
            'price'=>'required|numeric|min:1',
            'weight'=>'required|int',
            'picture'=>'required',
            'stock_quantity'=>'required|int|unique:products,picture',
            'category_id'=>'required',
            'available'=>'required|boolean'
        ], [
            'name.required'=>'Vous devez donner un nom à votre fromage!',
            'name.unique'=>'Ce fromage existe déjà!',
            'description.required'=>'Vous devez spécifier la description du fromage',
            'price.required'=>'Vous devez spécifier un prix',
            'price.min'=>'Tu veux pas gagner de sous toi',
            'weight'=>'Vous devez spécifier un poids',
            'picture'=>'Vous devez spécifier un chemin vers votre image',
            'stock_quantity'=> 'Vous devez spécifier une quantité valide',
            'category_id'=>'Vous devez spécifier une catégory valide',
            'available'=>'Vous devez spécifier si le produit est disponible'
        ]);
        Product::create($validated);

        return redirect()->route("backoffice.products")->with("added","Votre produit a bien été ajouté!");
    }
}