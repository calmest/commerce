<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class CategoryController extends Controller
{
    //
    public function addCategory(Request $request){
        if($request->isMethod('post')){


            $avatar = $request->avatar;
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            $avatar->move('storage/products', $filename);


            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $category = new Category;
            $category->name = $data['category_name'];
            $category->image = $filename;
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->status = '1';

            $category->save();
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category added Successfully!');
        }

     

        return view('admin.categories.add_category');
    }

    public function editCategory(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'], 'description'=>$data['description'], 'url'=>$data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category updated Successfully!');
        }
        $categoryDetails = Category::where('id', $id)->first();
        $levels = Category::where(['parent_id'=>0])->get();

        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }

    public function deleteCategory($id = null){
        if (!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Category deleted Successfully!');
        }
    }

    public function viewCategories(){
        //echo "test"; die;
        $categories = Category::get();
        //$categories = json_decode(json_encode($categories));
        //echo "<pre>"; print_r($categories); die;
        return view('admin.categories.view_categories')->with(compact('categories'));
    }


}
