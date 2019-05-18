<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class UserController extends Controller
{

    public function dashboard(){
        
        return view('user.dashboard');
    }
    public function settings(){
        return view('user.settings');
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $user = Auth::user()->id;
        $current_password = $data['current_pwd'];
        $check_password = User::where('id', '=',$user)->first();
        if(Hash::check($current_password, $check_password->password)){
            echo "true"; die;
        }else {
            echo "false"; die;
        }
        
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password, $check_password->password)){
                $password = bcrypt($data['new_pwd']);
                $user = Auth::user()->id;
                User::where('id', '=', $user)->update(['password'=>$password]);
                return redirect('/user/settings')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/user/settings')->with('flash_message_error','Password failed to Update!');
            }
        }
    }

        //
        public function addProduct(Request $request){
            if($request->isMethod('post')){
                $data = $request->all();
                // return $data;
                // echo "<pre>"; print_r($data); die;
    
            
                $avatar = $data['avatar'];
                $filename = time(). '.' . $avatar->getClientOriginalExtension();
                $avatar->move('storage/products', $filename);

                $video = $data['video'];
                $videofile = time(). '.' . $video->getClientOriginalExtension();
                $video->move('storage/products', $videofile);
                    
                $product = new Product;
                $product->category_id = $data['category_id'];
                $product->product_name = $data['product_name'];
                $product->url = $data['url'];
                $product->image = $filename;
                $product->video = $videofile;
                $product->description = $data['description'];
                $product->save();
                return redirect('/user/add-product')->with('flash_message_success', 'Product added Successfully!');
    
    
                

            }
    
            
            $category = Category::all();
            return view('user.products.add_product',compact('category'));
        }
    
        public function viewProducts(){
            //echo "test"; die;
            $product = Product::get();
            //$categories = json_decode(json_encode($categories));
            //echo "<pre>"; print_r($categories); die;
            return view('user.products.view_product')->with(compact('product'));
        }
    
        public function editProduct(Request $request, $id = null){
            if($request->isMethod('post')){
                $data = $request->all();
                Product::where(['id'=>$id])->update(['product_name'=>$data['product_name'], 'description'=>$data['description'], 'url'=>$data['url']]);
                return redirect('/user/view-products')->with('flash_message_success', 'Category updated Successfully!');
            }
            $productDetails = Product::where('id', $id)->first();
            // $levels = Category::where(['parent_id'=>0])->get();
    
            return view('user.products.edit_product')->with(compact('productDetails'));
        }
    
        public function deleteProduct($id = null){
            if (!empty($id)){
                Product::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_success', 'Category deleted Successfully!');
            }
        }
}
