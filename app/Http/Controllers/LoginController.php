<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('sign.index', [
            'tittle' => 'Login'
        ]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)) {
           $request->session()->regenerate();
           return redirect()->intended('/dash');
        }

        return back()->with('logerror', 'Login Failed!');

    }


    
    public function logout()
    {
        Auth::logout();
    
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/sign')->with('keluar', 'LOGOUT Success ..');
    }


}
