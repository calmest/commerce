<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
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
}
