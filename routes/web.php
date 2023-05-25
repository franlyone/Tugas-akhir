<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\Login3Controller;
use App\Http\Controllers\Register3Controller;
use App\Http\Controllers\CacaController;




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


// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Franly",
        "email" => "franly2@gmail.com",
        "image" => "coba.jpg"
    ]);
});

// Route::get('/coba', function () {
//     return view('coba',[
//         "title" => "coba"
//     ]);
// });

Route::get('/coba2', function() {
    return view('coba2',[
        "title" => "coba2"
    ]);
});

Route::get('/coba3', function() {
    return view('coba3',[
        "title" => "coba3"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman single post
route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories'=> Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);    
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'posts' => Post::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


// Route::resource('/dashboard/posts2', DashboardPostController::class)->middleware('auth');

Route::get('/coba', [Login3Controller::class, 'index'])->name('login')->middleware('guest');
Route::post('/coba', [Login3Controller::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/coba3', [Register3Controller::class, 'index'])->middleware('guest'); 
Route::post('/coba3', [Register3Controller::class, 'store']);