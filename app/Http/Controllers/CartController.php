<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function showAll()
    {
        $carts = Cart::all();
        return view('cart/carts', [
            'carts' => $carts
        ]);
    }
}
