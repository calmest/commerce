<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use App\Video;
use Auth;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function Upload(Request $request)
    {
        $user_id = Auth::User()->id;

        $vid = $request->video;
        $filename = time(). '.' . $vid->getClientOriginalExtension();
        $vid->move('storage/products', $filename);


        $video = new Video;
        $video->user_id = $user_id;
        $video->category_id = $request->category_id;
        $video->video_title = $request->title;
        $video->video = $filename;
        $video->description = $request->description;

        $video->save();

        return redirect()->back()->with('flash_message_success', 'Video added Successfully!');




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
                
            Video::where(['id' => $id])->update([
                'video_title' => $data['video_title'],
                'category_id' => $data['category_id'],
                'video' => $filename,
                'description' => $data['description'],
                ]);
            return redirect('/user/view-videos')->with('flash_message_success', 'Video updated Successfully!');
        }

        $videoDetails = video::where('id', $id)->first();
        $category = Category::all();

        return view('user.videos.edit_video')->with(compact('videoDetails','category'));
    }

    public function delete($id = null)
    {
        if (!empty($id))
        {
            Video::where(['id' => $id])->delete();
            return redirect()->back()->with('flash_message_success', 'video deleted Successfully!');
        }
    }
}
