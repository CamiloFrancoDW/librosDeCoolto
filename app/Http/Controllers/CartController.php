<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\ProductInCart;

class CartController extends Controller{
    public function index() {
        $carrito = \Auth::user()->productos()->get();
        return view('cart',compact('carrito'));
    }

    public function addProduct(Request $req, $productId) {
        $userId = \Auth::user()->id;
        $productInCart = ProductInCart::where('product_id', $productId)
            ->where('user_id', $userId)
            ->first();

        if ($productInCart) {
            $productInCart->count = $productInCart->count + $req->count;
        } else {
            $productInCart = new ProductInCart();
            $productInCart->product_id = $req->product_id;
            $productInCart->count = $req->count;
            $productInCart->user_id = $userId;
        }

        $productInCart->save();
        return redirect()->route('cart');
    }

    public function removeProduct(Request $req, $productId) {
        $userId = \Auth::user()->id;
        ProductInCart::where('product_id', $productId)
            ->where('user_id', $userId)
            ->delete();

        return redirect()->route('cart');
    }
}
