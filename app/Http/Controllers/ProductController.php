<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function list(){
        $products = \App\Product::all();
        return view('product', \compact('products'));
    }
}
