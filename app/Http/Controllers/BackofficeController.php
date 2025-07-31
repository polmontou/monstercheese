<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class BackofficeController extends Controller
{
    public function displayBackoffice(Request $request){
        $sortby = $request->query('sortby', 'id');
        $sortdir = $request->query('sortdir','desc');

        $products = Product::orderBy($sortby, $sortdir)->get();
        return view('backoffice.backoffice',['products'=>$products]);
    }

    public function showProduct($id){

        $product = Product::where('id',$id)->get();
        return view('backoffice.product',[
            'product'=>$product,
            'page_title'=>$product[0]->name
        ]);
    }   

    public function updateProduct($id){
        $product = Product::find($id);

        return view('backoffice.edit',[
            'product'=>$product
        ]);
    }

    public function update(Request $request, $id){

    
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'weight'=>'required|numeric',
            'stock_quantity'=>'required|integer|min:0',
            'category'=>'required|string|max:255',
            'available'=> 'required|boolean',
        
        ]);

        // if($request->hasFile('picture')){
        //     if($product->image_path){
        //         Storage::disk('public')->delete($product->image_path);
        //     }
        //     $imagePath=$request->file('picture')->store('product_image','public');
        //     $product->image_path=$imagePath;
        // }
        Product::findOrFail($id)->update($data);

        return redirect()->back()->with('success','Produit mis à jour avec succès.');

    }

    public function displayCreate(){

        return view('backoffice.create');
    }

    public function newProduct(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'weight'=>'required|numeric',
            'picture'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stock_quantity'=>'required|integer|min:0',
            'category'=>'required|string|max:255',
            'available'=> 'required|boolean',
        ]);

        Product::create($validated);

        return redirect()->back()->with('success','Produit ajouté avec succès.');
        }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success','Produit supprimé avec succès.');
    }

}
  
  

