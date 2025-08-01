<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use Mockery\Generator\StringManipulation\Pass\Pass;

class CartController extends Controller
{
    public function displayCart() {
        return view('cart');
    }

    public function addToCart(Request $request): RedirectResponse {
        $product_added = Product::find($request->product_order);
        $product_added->order_quantity = $request->order_quantity;
        $cart= $request->session()->get('cart', []);
        $cart[$product_added->id] = $product_added;  

        $request->session()->put('cart',$cart); 
        return redirect()->route('catalog')->with('success', 'Votre produit a bien été ajouté au panier!');
    }

    public function updateCart(Request $request): RedirectResponse {
        $cart=$request->session()->get('cart');
        if ($request->updateDelete == "update") {
            foreach($request->all() as $key => $value) {
                if (array_key_exists($key, $cart)) {
                    $cart[$key]->order_quantity = $value;
                    if ($cart[$key]->order_quantity == 0) {
                        unset($cart[$key]);
                    }  
                }
            }
        } else if ($request->updateDelete == "delete"){
            foreach($cart as $key => $value) {
                unset($cart[$key]);
            }
        } 
        $request->session()->put('cart',$cart);
        return redirect()->route('cart')->with('updated','Votre panièr a été mis à jour');
    }    
}