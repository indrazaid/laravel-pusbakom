<?php

use App\Http\Controllers\BahasaController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\VisiController;

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


// Route::get('/visi', function () {
//     return view('master.visi',['title'=> 'Visi dan Misi']);
// });

// Tampil Visi dan Misi
Route::get('/visi',[VisiController::class,'index']);


// Route::get('/struktur', function () {
//     return view('master.struktur',['title'=> 'Struktur Organisasi']);
// });

// Tampil Struktur
Route::get('/struktur',[StrukturController::class,'index']);

Route::get('/perpus', function () {
    return view('master.perpus',['title'=> 'Perpustakaan']);
});

// Route::get('/lab-bahasa', function () {
//     return view('master.lab-bahasa',['title'=> 'Lab Bahasa']);
// });
// Tampil Lab Bahasa
Route::get('/lab-bahasa',[BahasaController::class,'index']);

Route::get('/lab-komputer',[KomputerController::class,'index']);

Route::get('/perpus',[PerpusController::class,'index']);

Route::get('/galeri', function () {
    return view('master.galeri',['title'=> 'Galeri']);
});

// Tampil Semua Berita
Route::get('/post',[PostController::class,'index']);
// Route::get('/post/{post:slug}',[PostController::class,'show']); 
Route::get('/post/{post:slug}',[PostController::class,'show']); 

// Tampil Category
Route::get('/categories',[CategoryController::class,'index']);

// Route::get('/categories/{category:slug}',[CategoryController::class,'show']);

Route::get('/category/{category:slug}',[CategoryController::class,'show']);

// Tampil User post
Route::get('/users/{user:id}',[UserController::class,'show']);

Route::get('/detail', function () {
    return view('master.detail');
});


Route::get('/contact', function () {
    return view('master.contact',['title'=> 'Contact']);
});
// ADMIN
// Login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

// Register
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function () {
    return view('admin.dashboard',['title'=> 'Dasboard']);
})->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/berita', function () {
    return view('admin.berita',['title'=> 'Berita']);
})->middleware('auth');









