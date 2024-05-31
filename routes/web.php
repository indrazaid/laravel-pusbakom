<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('landing-page');
});

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

Route::get('/posts', function () {
    return view('master.posts');
});

Route::get('/detail', function () {
    return view('master.detail');
});


Route::get('/contact', function () {
    return view('master.contact');
});






