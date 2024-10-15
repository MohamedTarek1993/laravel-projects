<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('users' , function( ){
    return view('users');
});


Route::controller(PostController::class)->group(function(){
    Route::get('posts' , 'index');
    Route::get('posts/{post}' , 'showPost');
    Route::get('posts/create' ,'createPost');
});

