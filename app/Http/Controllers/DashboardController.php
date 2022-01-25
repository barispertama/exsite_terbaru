<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('dash.index');
    }

    public function addnew(){
        return view('dashadd.index');
    }

    public function indexpos()
    {
      return view('dash.index', [
        "posts" => Post::all()->where('id_user', auth()->user()->id)
      ]);
    }

    public function showpos(Post $posts)
    {
      return view('post', [
        "tittle" => "single post",
        "post" => $posts
      ]);
    }

    public function store(Request $request)
    {
         $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
    
        Post::create($request->all());
     
        return redirect()->route('dashadd.index')->with('success','Post created successfully.');
    }

}
