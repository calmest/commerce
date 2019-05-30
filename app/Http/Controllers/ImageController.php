<?php

namespace App\Http\Controllers;


use App\Category;
use App\Image;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function Upload(Request $request)
    {
        $user_id = Auth::User()->id;

        $avatar = $request->avatar;
        $filename = time(). '.' . $avatar->getClientOriginalExtension();
        $avatar->move('storage/products', $filename);


        $image = new Image;
        $image->user_id = $user_id;
        $image->category_id = $request->category_id;
        $image->image_title = $request->title;
        $image->image = $filename;
        $image->description = $request->description;

        $image->save();

        return redirect()->back()->with('flash_message_success', 'Image added Successfully!');




        // return $request->all();
    }

    public function update(Request $request, $id = null)
    {
      if ($request->isMethod('post'))
        {
            $data = $request->all();

            $avatar =  $data['avatar'];
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            $avatar->move('storage/products', $filename);
                
            Image::where(['id' => $id])->update([
                'image_title' => $data['image_title'],
                'category_id' => $data['category_id'],
                'image' => $filename,
                'description' => $data['description'],
                ]);
            return redirect('/user/view-images')->with('flash_message_success', 'Imagee updated Successfully!');
        }

        $imageDetails = Image::where('id', $id)->first();
        $category = Category::all();

        return view('user.images.edit_image')->with(compact('imageDetails','category'));
    }

    public function delete($id = null)
    {
        if (!empty($id))
        {
            Image::where(['id' => $id])->delete();
            return redirect()->back()->with('flash_message_success', 'Image deleted Successfully!');
        }
    }
}

