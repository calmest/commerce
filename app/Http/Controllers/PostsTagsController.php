<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class PostsTagsController extends Controller
{
    //
    public function addTag(Request $request){
        if($request->isMethod('post')){

            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $tag = new Tag;
            $tag->title = $data['title'];
            $tag->slug = $data['slug'];

            $tag->save();
            return redirect('/admin/posts/view-tags')->with('flash_message_success', 'Tag added Successfully!');
        }
        return view('admin.posts.tag.add_tag');
    }

    public function editTag(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Tag::where(['id'=>$id])->update(['title'=>$data['tag_title'], 'slug'=>$data['tag_slug']]);
            return redirect('/admin/posts/view-tags')->with('flash_message_success', 'Tag updated Successfully!');
        }
        $tagDetails = Tag::where('id', $id)->first();

        return view('admin.posts.tag.edit_tag')->with(compact('tagDetails'));
    }

    public function deleteTag($id = null){
        if (!empty($id)){
            Tag::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Tag deleted Successfully!');
        }
    }

    public function viewTags(){
        //echo "test"; die;
        $tags = Tag::get();
        //$categories = json_decode(json_encode($categories));
        //echo "<pre>"; print_r($categories); die;
        return view('admin.posts.tag.view_tags')->with(compact('tags'));
    }


}
