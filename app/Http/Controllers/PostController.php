<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->view_dir = 'master.';

    }
    public function index(){
        $post = Post::orderBy('created_at', 'desc')->get();
        $title ='Post  ';

     
        return view($this->view_dir.'post', compact('title','post'));
        // return view('master.post');
    }

    public function show(Post $post){
       
        $title ='Post Show ';
       
        $recentPosts = Post::orderBy('created_at', 'desc')->take(6)->get();

        $CategoryPost = Category::all();

        

        return view('master.detail', compact( 'title','post', 'recentPosts','CategoryPost'));
        // return view($this->view_dir.'detail', compact('post'));
    }

  
}
