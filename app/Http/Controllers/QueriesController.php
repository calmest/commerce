<?php

namespace App\Http\Controllers;

use App\Image;
use App\Video;
use Illuminate\Http\Request;

class QueriesController extends Controller
{
    public function search(Request $request, $req)
    {
    	$image = Image::where('image_title', 'like', '%' . $req . '%')
    			->orWhere('description', 'like', '%' . $req . '%')->get();
    	$video =  Video::where('video_title', 'like', '%' . $req . '%')
    			->orWhere('description', 'like', '%' . $req . '%')->get();

    	$data = array('image' => $image, 'video' => $video);

        return $data;
    }
}
