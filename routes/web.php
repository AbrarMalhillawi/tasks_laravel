<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\test1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\task;

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


// Route::get('/profile', function () {
//     return view('profile');
// });
// Route::get('/admin', function () {
//     return view('admin');
// });
// Route::get('/users', function () {
//       return view('users');
// });

// Route::get('/contact', function () {
//     $array=['abrar','hanen','nour'];
//     return view('contact',compact('array'));
// });





//////////////////////////////////////////////////
//////////////////////////////////////////////////



// Route::get('posts',[PostController::class,'welcom'] );
// Route::get('users',[PostController::class,'showUsers'] );
Route ::get ('task',[task::class,'show']);
// Route ::get ('task',[task::class,'welcom']);


// Route::controller(PostController::class)->group(function()
// {
//     Route::get('task','welcom');
//     Route::get('users','showUsers');
// });

