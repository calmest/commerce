<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use App\Video;
use App\Product;

class VideoController extends Controller
{
    public function Upload(Request $request)
    {
        $user_id = Auth::User()->id;

        $avatar = $request->video;
        $filename = time(). '.' . $avatar->getClientOriginalExtension();
        $avatar->move('storage/products', $filename);


        $video = new Video;
        $video->user_id = $user_id;
        $video->product_id = $request->product_id;
        $video->video = $filename;
        $video->description = $request->description;

        $video->save();

        return redirect()->back()->with('flash_message_success', 'Video added Successfully!');




        // return $request->all();
    }
}
