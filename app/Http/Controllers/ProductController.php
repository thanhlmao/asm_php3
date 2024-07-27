<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetail ($id) {
        $product = Product::findOrFail($id);
        return view('client.detail_product' , ['product' => $product]);
    }
}
