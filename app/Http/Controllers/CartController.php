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
        Cart::create([
            'productid' => $request->productid,
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        // $id = $request->productid;
        // return redirect()->route('cart.update', $id);
        return redirect('/member');
    }

    // public function update(Request $request, $id){
    //     $product = Product::find($id);
    //     $product->update([
    //         'stock' => $request->stockTaken,
    //     ]);
    //     dd($request);
    //     $product->save();
    //     return redirect('/member');
    // }

    public function delete($id) {
        $cart = Cart::find($id);
        $cart->delete();
        return back();
    }
}
