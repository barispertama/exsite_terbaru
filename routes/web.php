<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
ROUTE DEFAULT

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {
    return view('home');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/about', function () {
    return 'halaman about';
});

Route::get('/users', function () {
    return 'halaman users';
});

Route::get('/sign', [LoginController::class,'index'])->name('sign')->middleware('guest');
Route::post('/sign', [LoginController::class,'auth']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/signup', [SignupController::class,'index'])->middleware('guest');
Route::post('/signup', [SignupController::class,'postsignup']);

Route::get('/dash', [DashboardController::class,'index'])->middleware('auth');
Route::get('/dash', [DashboardController::class,'indexpos'])->middleware('auth');
Route::get('/dashadd', [DashboardController::class,'addnew'])->middleware('auth');
Route::resource('/dashadd', DashboardController::class)->middleware('auth');

Route::post('/posts', [PostController::class,'index']);

Route::get('/{company}/{slug}', [PostController::class,'show']);