<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Order;

class MemberController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('member', compact('products'));
    }

    public function store(Request $request) {
        // dd($request);
        $validate = \Validator::make($request->all(), [
            'address' => 'required|string|min:10|max:100',
            'pos' => 'required|numeric|regex:/^\d{5}/'
        ])->validate();

        Order::create([
            'invoice' => $request->invoice,
            'customer' => $request->customer,
            'address' => $request->address,
            'pos' => $request->pos,
            'total_price' => $request->total_price,
        ]);
        return redirect('/member');
    }
}
