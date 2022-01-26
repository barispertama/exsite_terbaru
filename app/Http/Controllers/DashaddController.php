<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashaddController extends Controller
{
    public function index(){
        return view('dashadd.index');
    }

    public function create()
    {
        $model = new Post;
        return view('dashadd.index', compact('model'));
    }    

    public function store(Request $request)
    {
        $validasiinput = $request->validate([
            'judul' => 'required|max:255',
          ]);
          
          $validasiinput['company'] = Str::slug(auth()->user()->company, '-');
          $validasiinput['slug'] = Str::slug($validasiinput['judul'], '-');
          $validasiinput['id_user'] = auth()->user()->id;
          $validasiinput['isi'] = Str::limit($request->isi,100000);
        
          Post::create($validasiinput);
          return redirect('dash')->with('success', 'New policy has been created !');
        
    }


    public function update(Request $request, $id)
    {
        $model = Post::where('id', $id)->where('id_user', Auth::id())->first();
        $validasiinput = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
          ]);
        $model->judul = $validasiinput['judul'];
        $model->isi = Str::limit($validasiinput['isi'],100000);
        $model->slug = Str::slug($validasiinput['judul'], '-');
        $model->id_user = auth()->user()->id;

        $model->save();

        return redirect('dash')->with('success', "Data berhasil diperbaharui");
    }    

    public function show(){
        return view('dashadd.edit');
    }

    public function edit($id)
    {
        $model = Post::where('id', $id)->where('id_user', Auth::id())->first();
        if (!$model) abort(404);
        return view('dashadd.edit', compact('model'));
    }


    public function destroy($id)
    {
        $model = Post::where('id', $id)->where('id_user', Auth::id())->first();
        $model->delete();
        return redirect('dash')->with('success','Privacy Policy Has been Deleted!');
    }    


}
