<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    //
    public function addProduct(Request $request){
        return view('admin.products.add_product');
    }
}
