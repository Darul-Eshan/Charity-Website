<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public static function blogPost()
    {
        return view('admin.blog.blog-post');
    }
    public function blogSave(Request $request)
    {
        Blog::blogPost($request);
        return back()->with('success', 'Blog post successfully saved');
    }
}
