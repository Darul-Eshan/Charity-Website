<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class UpcomingEvent extends Model
{
    private static $UpcomingEvent,$image,$imageNewName,$directory,$imgUrl;
    public static function eventSave($request){
        $request->validate([
            'title' => 'required|string',
            'about' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'location' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'title.required' => 'Please enter event title',
            'about.required' => 'Please enter event about',
            'date.required' => 'Please enter event date',
            'time.required' => 'Please enter event time',
            'location.required' => 'Please enter event location',
            'image.required' => 'Please enter event image',

        ]);
       self::$UpcomingEvent=new UpcomingEvent();
       self::$UpcomingEvent->title=$request->title;
       self::$UpcomingEvent->about=$request->about;
       self::$UpcomingEvent->date=$request->date;
       self::$UpcomingEvent->time=$request->time;
       self::$UpcomingEvent->location=$request->location;
       if($request->hasFile('image')){
           self::$UpcomingEvent->image=self::getImgUrl($request);
       }
       self::$UpcomingEvent->save();
    }
    private static function getImgUrl($request){
        self::$image=$request->file('image');
        self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='admin-assets/event-images/';
        self::$imgUrl =self::$directory.self::$imageNewName;
        if (!file_exists(self::$directory)) {
            mkdir(self::$directory,0777,true);
        }
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }

}
