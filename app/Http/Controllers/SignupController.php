<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup.index', [
            'tittle' => 'signup'
        ]);
    }

    public function postsignup(Request $request)
    {
        $validasidata = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'company' => 'required|max:200',
            'password'=> 'required|min:5|max:200'
        ]);
        $validasidata['password'] = bcrypt($validasidata['password']);

        User::create($validasidata);

        return redirect('/sign')->with('success', 'SIGNUP Success!! Login Now..');

    }
}
