<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

 public static function commentStore($request,$id)
 {
     $request->validate([
         'name'      => 'required|string|max:255',
         'email'     => 'required|email|max:255',
         'comment'   => 'required|string',
         'parent_id' => 'nullable|integer|exists:comments,id',
     ]);

     $blog = Blog::findOrFail($id);
     $blog->comments()->create([
         'name'      => $request->name,
         'email'     => $request->email,
         'comment'   => $request->comment,
         'parent_id' => $request->parent_id ?? null,
         'user_id'   => auth()->id() ?? null,
     ]);


 }
    protected $fillable = [
        'name',
        'email',
        'comment',
        'parent_id',
        'user_id',
        'blog_id',
    ];
public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
public function blog()
{
    return $this->belongsTo(Blog::class, 'blog_id');
}
public function parent()
{
    return $this->belongsTo(Comment::class, 'parent_id');
}
public function replies()
{
    return $this->hasMany(Comment::class, 'parent_id');
}



}
