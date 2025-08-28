<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private static $category;
    public function addCategoryForm(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
        return back()->with('massage','info save Successfully');
    }
    public function managePost()
    {
        return view('admin.category.manage-post',[
            'categories' => Category::all()
        ]);
    }
    public function statusPost($id)
    {
        self::$category = Category::find($id);
        if(self::$category->status == 1){
            self::$category->status = 0;
        }
        else{
            self::$category->status = 1;
        }
        self::$category->save();
        return back()->with('massage','Status Change Successfully');
    }
    public function editPost($id)
    {
        return view('admin.category.edit-post',[
            'category' => Category::find($id)
        ]);
    }
    public function updatePost(Request $request,$id)
    {
        Category::updatePost($request,$id);
        return redirect(route('post.manage',$id))->with('massage','Post Update Successfully');
    }
}
