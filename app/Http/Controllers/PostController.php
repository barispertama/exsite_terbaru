<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
      return view('posts', [
        "tittle" => "Posts",
        "posts" => Post::all()
      ]);
    }


    public function show($company, $slug)
    {
      $post = Post::where('company', $company)->where('slug',$slug)->first();
      return view('artikel.index', compact('post'));
    }

}
