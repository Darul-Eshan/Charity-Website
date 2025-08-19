<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/blog',[WebController::class,'blog'])->name('blog');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
