<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UpcomingEvent;
use Illuminate\Http\Request;
use App\Models\Blog;

class WebController extends Controller
{
    public function index()
    {
        return view('home.web-home',[
            'categories'=> Category::all(),
            'upcomingevents'=>UpcomingEvent::all(),

        ]);

    }
    public static function blog()
    {
        return view('home.web-blog',[
            'blogs'=>Blog::where('status',1)->orderBy('id','desc')->take(4)->get(),
        ]);
    }
    public function blogDetails($id)
    {
        return view('home.web-blog-details',[
            'blog'=>Blog::find($id)
        ]);
    }
    public static function about()
    {
        return view('home.web-about');
    }
    public static function events()
    {
        return view('home.web-event');
    }
}
