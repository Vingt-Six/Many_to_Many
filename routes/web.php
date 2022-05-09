<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use App\Models\Tag;
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
    $posts = Post::all();
    $tags = Tag::all();
    return view('welcome', compact('posts', 'tags'));
});

Route::resource('post', PostController::class);
Route::resource('tag', TagController::class);
