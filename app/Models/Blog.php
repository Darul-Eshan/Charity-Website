<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    private static $blogs,$imgUrl,$image,$imageNewName,$directory ;
    public static function blogPost($request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],
            [
                'title.required' => 'Please enter the title.',
                'content.required' => 'Please enter the content.',
                'image.required' => 'Please enter the image.',

            ]);
        self::$blogs= new Blog();
        self::$blogs->title = $request->title;
        self::$blogs->content= $request->content;
        if($request->hasFile('image')){
            self::$blogs->image= self::getImgUrl($request);
       }
        self::$blogs->save();
    }
    private static function getImgUrl($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-assets/category-images/';
        self::$imgUrl = self::$directory.self::$imageNewName;
    if (!file_exists(self::$directory)) {
        mkdir(self::$directory , 0777, true);
    }
self::$image->move(self::$directory, self::$imageNewName);
    return self::$imgUrl;

    }
}
