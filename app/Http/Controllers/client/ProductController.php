<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::paginate(20);
        
        return view("client.pages.product.index")->with([
            "products" => $products 
        ]);
    }

    public function detail($id) {
        $product = Product::findOrFail($id);
        
        return view("client.pages.product.detail")->with([
            "product" => $product
        ]);
    }
}
