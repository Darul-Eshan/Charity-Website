<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UpcomingEventController;
use App\Http\Controllers\CommentController;


Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/blog',[WebController::class,'blog'])->name('blog');
Route::get('/blog/details/{id}',[WebController::class,'blogDetails'])->name('blog_details');
Route::get('/about',[WebController::class,'about'])->name('about');
Route::get('/social-events',[WebController::class,'events'])->name('event');
Route::post('/comment/store/{id}',[CommentController::class,'commentStore'])->name('comment.store');
Route::get('/comment/mange',[CommentController::class,'commentMange'])->name('comment.mange');




    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add',[CategoryController::class,"addCategoryForm"])->name('category.add');
    Route::get('/category/manage',[CategoryController::class,"manageCategory"])->name('category.manage');
    Route::post('/category/save',[CategoryController::class,"saveCategory"])->name('category.store');


    Route::get('/post/manage',[CategoryController::class,"managePost"])->name('post.manage');
    Route::get('/post/status/{id}',[CategoryController::class,"statusPost"])->name('post.status');
    Route::get('/post/edit/{id}',[CategoryController::class,"editPost"])->name('post.edit');
    Route::post('/post/update/{id}',[CategoryController::class,"updatePost"])->name('post.update');
    Route::get('/post/delete/{id}',[CategoryController::class,"deletePost"])->name('post.delete');

    Route::get('/blog/post/',[BlogsController::class,'blogPost'])->name('blog.post');
    Route::post('/blog/post/save',[BlogsController::class,'blogSave'])->name('blog.save');
    Route::get('/blog/post/manage',[BlogsController::class,'blogManage'])->name('blog.manage');

    Route::get('/blog/post/edit/{id}',[BlogsController::class,'blogEdit'])->name('blog.edit');
    Route::post('/blog/post/update/{id}',[BlogsController::class,'blogUpdate'])->name('blog.update');

    Route::get('/blog/post/status/{id}',[BlogsController::class,'blogStatus'])->name('blog.status');
    Route::get('/blog/post/delete/{id}',[BlogsController::class,'blogDelete'])->name('blog.delete');

    Route::get('/upcoming/events/add',[UpcomingEventController::class,'eventAdd'])->name('upcoming.event.add');
    Route::post('/Upcoming/event/save',[UpcomingEventController::class,'eventSave'])->name('upcoming.event.save');


    Route::get('/comment/mange',[CommentController::class,'commentMange'])->name('comment.mange');





