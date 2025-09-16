<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    private static $blog;
    public static function blogPost()
    {
        return view('admin.blog.blog-post',[
            'categories'=>Category::where('status',1)->get(),
        ]);
    }
    public function blogSave(Request $request)
    {
        Blog::blogPost($request);
        return back()->with('success', 'Blog post successfully saved');
    }
     public function blogManage(){
        return view('admin.blog.blog-manage',[
            'blogs' => Blog::all(),
        ]);
     }
     public function blogEdit($id){
        return view('admin.blog.blog-edit',[
            'blog'=>Blog::find($id)
        ]);
     }
     public function blogUpdate(Request $request,$id){
      Blog::updateBlog($request,$id);
        return redirect(route('blog.manage'))->with('success', 'Blog post successfully saved');
     }

     public function blogStatus($id)
     {
        self::$blog=Blog::find($id);
        if (self::$blog->status==1){
            self::$blog->status=0;
        }
        else{self::$blog->status=1;
        }
        self::$blog->save();
        return back()->with('massage','Status Change Successfully');
     }

}
