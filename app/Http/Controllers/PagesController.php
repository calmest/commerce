<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Video;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function terms(){
        return view('pages.terms');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function marketing(){
        return view('pages.marketing.index');
    }

    public function hairstyles(){
        return view('pages.marketing.hairstyles.index');
    }

    public function naturalhair(){
        return view('pages.marketing.hairstyles.natural_hair');
    }

    public function synthetichair(){
        return view('pages.marketing.hairstyles.synthetic_hair');
    }

    public function colouredhair(){
        return view('pages.marketing.hairstyles.coloured_hair');
     }

    public function clothstyles(){
        return view('pages.marketing.clothestyles.index');
    }

    public function makeups(){
        return view('pages.marketing.makeups.index');
    }

    public function models(){
        return view('pages.marketing.models.index');
    }

    public function getCategory($id)
    {
       $category = Category::find($id);
       $images = Image::where('category_id', '=', $id)->get();
       $videos = Video::where('category_id', '=', $id)->get();
       $data = ['category' => $category, 'images' => $images, 'videos' => $videos];
        
       return view('pages.marketing.category',compact('category','images','videos','data'));
    }
}
