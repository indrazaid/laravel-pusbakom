<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

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

// landing page
// Route::get('/', function () {
//     return view('landing-page');
// });

Route::get('/',[LandingController::class,'index']);

Route::get('/visi', function () {
    return view('master.visi');
});

Route::get('/struktur', function () {
    return view('master.struktur');
});

Route::get('/perpus', function () {
    return view('master.perpus');
});

Route::get('/lab-bahasa', function () {
    return view('master.lab-bahasa');
});

Route::get('/lab-komputer', function () {
    return view('master.lab-komputer');
});


Route::get('/galeri', function () {
    return view('master.galeri');
});

// Tampil Semua Berita
Route::get('/post',[PostController::class,'index']);
// Route::get('/post/{post:slug}',[PostController::class,'show']); 
Route::get('/post/{post:slug}',[PostController::class,'show']); 

// Tampil Category
Route::get('/categories',[CategoryController::class,'index']);

// Route::get('/categories/{category:slug}',[CategoryController::class,'show']);

Route::get('/category/{category:slug}',[CategoryController::class,'show']);

Route::get('/detail', function () {
    return view('master.detail');
});


Route::get('/contact', function () {
    return view('master.contact');
});








