<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('posts/', [\App\Http\Controllers\BlogController::class,'postsindex']);
Route::get('posts/{blog}', [\App\Http\Controllers\BlogController::class,'postsindexshow']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/admin', function () {return view('dashboard');})->name('dashboard');
    Route::resource('admin/categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('admin/blog', \App\Http\Controllers\BlogController::class);
});


