<?php

namespace App\Http\Controllers;
use App\Models\post;
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
       
        return view($this->view_dir.'detail', compact('post'));
    }

  
}
