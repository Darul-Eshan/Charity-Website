<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public static function index()
    {
        return view('home.web-home');
    }
    public static function blog()
    {
        return view('home.web-blog');
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
