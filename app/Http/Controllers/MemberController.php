<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class MemberController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('member', compact('products'));
    }
}
