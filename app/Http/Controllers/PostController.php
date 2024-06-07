<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->view_dir = 'master.';

    }
    public function index(){
        $post = Post::all();
        return view($this->view_dir.'post', compact('post'));
        // return view('master.post');
    }

    public function show(Post $post){
       
        $recentPosts = Post::orderBy('publish_at', 'desc')->take(5)->get();

        $CategoryPost = Post::all();

        

        return view('master.detail', compact( 'post', 'recentPosts','CategoryPost'));
        // return view($this->view_dir.'detail', compact('post'));
    }

  
}
