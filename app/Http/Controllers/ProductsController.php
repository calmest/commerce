<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;
use App\Video;

class ProductsController extends Controller
{
    //
    public function addProduct(Request $request){
        if($request->isMethod('post')){
          $data = $request;
            // $avatar = $data['avatar'];
            // $filename = time(). '.' . $avatar->getClientOriginalExtension();
            // $avatar->move('storage/products', $filename);

            // $video = $data['video'];
            // $videofile = time(). '.' . $video->getClientOriginalExtension();
            // $video->move('storage/products', $videofile);
                
            $product = new Product;
            $product->user_id = Auth::user()->id;

            $product->category_id = $data['category_id'];
            $product->product_name = $data['product_name'];
            $product->url = $data['url'];
            $product->description = $data['description'];
            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success', 'Product added Successfully!');

        }

        
        $category = Category::all();
        return view('admin.products.add_product',compact('category'));
    }

   
    public function addFile()
    {

        $products = Product::all();
        return view('admin.products.add_file',compact('products'));
        # code...
    }

    public function viewFiles()
    {

        $images = Image::with('Products')->get();
        $videos = Video::with('Products')->get();

            // return $images;

        return view('admin.products.view_files',compact('images','videos'));
      
    }

    


    public function viewProducts(){
        //echo "test"; die;
        $product = Product::with('Images','Videos')->get();
        // return $product;
        //$categories = json_decode(json_encode($categories));
        //echo "<pre>"; print_r($categories); die;
        return view('admin.products.view_product')->with(compact('product'));
    }

    public function editProduct(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Product::where(['id'=>$id])->update(['product_name'=>$data['product_name'], 'description'=>$data['description'], 'url'=>$data['url']]);
            return redirect('/admin/view-products')->with('flash_message_success', 'Category updated Successfully!');
        }
        $productDetails = Product::where('id', $id)->first();
        // $levels = Category::where(['parent_id'=>0])->get();

        return view('admin.products.edit_product')->with(compact('productDetails'));
    }

    public function deleteProduct($id = null){
        if (!empty($id)){
            Product::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Category deleted Successfully!');
        }
    }
}
