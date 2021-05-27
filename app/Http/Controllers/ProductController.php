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

    // public function store(Request $request) {
    //     $this->validate($request, [
    //         'category' => 'required',
    //         'name' => 'required',
    //         'price' => 'required',
    //         'stock' => 'required',
    //     ]);

    //     $emps = new Product;

    //     $emps->category = $request->input('category');
    //     $emps->name = $request->input('name');
    //     $emps->price = $request->input('price');
    //     $emps->stock = $request->input('stock');

    //     $emps->save();
    
    //     return redirect('/admin');
    // }

    public function store(Request $request) {
        // return $request;
        // dd($request);
        $path = $request->file('image')->store("public/product_img");
        Product::create([
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'file' => $path
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
