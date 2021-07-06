<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product() {
        $products = Products::all();
        return view('pages/product', compact('products'));
    }
}
