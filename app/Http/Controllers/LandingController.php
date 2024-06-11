<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $title ='Pusat Layanan Bahasa ,Pustaka dan Komputer';
        $recentPosts = Post::orderBy('publish_at', 'desc')->take(5)->get();
        return view('landing-page', compact('title', 'recentPosts'));
    }
}
