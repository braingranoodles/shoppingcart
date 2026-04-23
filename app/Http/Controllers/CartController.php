<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    /**
     * Add a product to new cart
     */

    public function add($sku)
    {
        $product = Product::where('sku', $sku)->firstOrFail();

        $cart = session()->get('cart', []);

        if (isset($cart[$sku])) {
            $cart[$sku]['quantity']++;
        } else {
            $cart[$sku] = [
                'sku' => $product->sku,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect('/cart');
    }
    /** 
     * Update product stock
     */
    public function update(Request $request, $sku)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$sku])) {
            $quantity = (int) $request->quantity;

            if ($quantity <= 0) {
                unset($cart[$sku]);
            } else {
                $cart[$sku]['quantity'] = $quantity;
            }

            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }
    /**
     * DELTE IT
     */
    public function remove($sku)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$sku])) {
            unset($cart[$sku]);
            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }
}