<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
use HasFactory;
 private static $category,$image, $imageNewName,$directory,$imgUrl;
public static function saveCategory($request){
    // Validate inputs
    $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
    ], [
        'title.required' => 'Please enter a title.',
        'content.required' => 'Please enter the content.',
        'image.image' => 'The file must be an image.',
    ]);

    self::$category         = new Category();
    self:: $category->title = $request->title;
    self::$category->content= $request->content;

    if ($request->hasFile('image')) {
        self::$category->image = self::getImgUrl($request);
    }
    self::$category->save();
}
    private static function getImgUrl($request){
    self::$image       =$request->file('image');
    self::$imageNewName=rand().'.'.self::$image->extension();
    self::$directory   ='admin-assets/category-images/';
    self::$imgUrl      =self::$directory.self::$imageNewName;
        // Folder exists check
        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0755, true);
        }
    self::$image->move(self::$directory,self::$imageNewName);
    return self::$imgUrl;
}
}
