<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
   public function index()
   {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' : '. $category->name;
        }
        return view('posts', [
            "title" => "All Assets". $title, 
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString()
        ]);
   }

//    public function show(Post $post)
//    {
//         return view('post', [
//             "title" => "single post",
//             "post" => $post
//         ]);
//    }

   public function show(Post $post)
   {
        return view('coba2', [
            "title" => "coba3",
            "post" => $post
        ]);
   }
}
