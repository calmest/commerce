<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    //
    public function addProduct(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

        
            $avatar = $data['avatar'];
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            $avatar->move('storage/products', $filename);
                
            $product = new Product;
            $product->product_name = $data['pr$product_name'];
            
           
        }

        
        $category = Category::all();
        return view('admin.products.add_product',compact('category'));
    }
}
