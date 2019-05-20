<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Image;

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
        $image->product_id = $request->product_id;
        $image->image = $filename;
        $image->description = $request->description;

        $image->save();

        return redirect()->back()->with('flash_message_success', 'Image added Successfully!');




        // return $request->all();
    }
}

