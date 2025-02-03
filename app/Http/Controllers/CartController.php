<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())->with('products')->first();
        return view('cart', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        $cart->products()->attach($product, ['quantity' => $request->quantity ?? 1]);

        return redirect()->back()->with('success', 'Producto añadido al carrito');
    }

    public function removeFromCart($productId)
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        $cart->products()->detach($productId);

        return redirect()->back()->with('success', 'Producto eliminado del carrito');
    }

    public function updateCart(Request $request, $productId)
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        $cart->products()->updateExistingPivot($productId, ['quantity' => $request->quantity]);

        return redirect()->back()->with('success', 'Carrito actualizado');
    }
}