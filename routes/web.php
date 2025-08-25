<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;


Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/blog',[WebController::class,'blog'])->name('blog');
Route::get('/about',[WebController::class,'about'])->name('about');
Route::get('/social-events',[WebController::class,'events'])->name('event');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),
    'verified',])->group(function () {

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/category/add',[CategoryController::class,"addCategoryForm"])->name('category.add');
    Route::get('/category/manage',[CategoryController::class,"manageCategory"])->name('category.manage');
    Route::post('/category/save',[CategoryController::class,"saveCategory"])->name('category.store');
    });
