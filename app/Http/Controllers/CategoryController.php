<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategoryForm(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
    }
}
