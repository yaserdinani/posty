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

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class,'index'])->name('register');
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class,'store']);
