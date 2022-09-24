<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function index() {
        $carts = Cart::all();
        return view('cart', compact('carts'));
    }

    public function store(Request $request) {
        $path = $request->file('image')->store("cartImages");
        Cart::create([
            'productid' => $request->productid,
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'file' => $path,
        ]);
        return redirect('/member');
    }

    public function delete($id) {
        $cart = Cart::find($id);
        $cart->delete();
        return back();
    }
}
