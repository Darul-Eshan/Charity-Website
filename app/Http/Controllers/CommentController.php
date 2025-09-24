<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
public function commentStore(Request $request, $id)
{
    Comment::commentStore($request, $id);
    return back()->with('success', 'Comment added successfully');

}
public function commentMange()
{
    return view('admin.comment.comment-manage',
        ['comments'=>Comment::all()]);


}
}
