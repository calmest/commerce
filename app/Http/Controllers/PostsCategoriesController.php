<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCategory;
use Auth;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class PostsCategoriesController extends Controller
{
    //
    public function addCategory(Request $request){
        if($request->isMethod('post')){

            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $postcat = new PostCategory;
            $postcat->title = $data['postcat_title'];
            $postcat->slug = $data['postcat_slug'];

            $postcat->save();
            return redirect('/admin/posts/view-categories')->with('flash_message_success', 'Post Category added Successfully!');
        }

        return view('admin.posts.category.add_category');
    }

    public function editCategory(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            PostCategory::where(['id'=>$id])->update(['title'=>$data['postcat_title'], 'slug'=>$data['postcat_slug']]);
            return redirect('/admin/posts/view-categories')->with('flash_message_success', 'Post Category updated Successfully!');
        }
        $categoryDetails = PostCategory::where('id', $id)->first();

        return view('admin.posts.category.edit_category')->with(compact('categoryDetails'));
    }

    public function deleteCategory($id = null){
        if (!empty($id)){
            PostCategory::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Post Category deleted Successfully!');
        }
    }

    public function viewCategories(){
        //echo "test"; die;
        $postcats = PostCategory::get();
        //$categories = json_decode(json_encode($categories));
        //echo "<pre>"; print_r($categories); die;
        return view('admin.posts.category.view_categories')->with(compact('postcats'));
    }


}
