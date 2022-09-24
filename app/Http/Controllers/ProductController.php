<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin', compact('products'));
    }

    public function store(Request $request) {
        // return $request;
        // dd($request->file('image'));
        $validate = \Validator::make($request->all(), [
            'category' => 'required|string',
            'name' => 'required|string|min:5|max:80',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'file' => 'nullable'
        ])->validate();
        $path = $request->file('image')->store("productImages");
        Product::create([
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'file' => $path,
        ]);
        
        return redirect('/admin');
    }

    public function show($id) {
        $product = Product::find($id);
        return view('show', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update([
            'stock' => $request->stock,
        ]);
        return redirect('/admin');
    }

    public function delete($id) {
        $product = Product::find($id);
        $product->delete();
        return back();
    }
}
