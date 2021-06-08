<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;

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

Route::get('/', IndexController::class);
Route::resource('/posts', PostController::class);

// Route::get('/create',function(){
//     $post = new Post;
//     $post->title = 'test title 01';
//     $post->description = 'test description';
//     $post->save();

//     return 'Create Successfully';
// });