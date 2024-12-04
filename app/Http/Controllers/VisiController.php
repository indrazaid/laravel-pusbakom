<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function __construct()
    {
        $this->view_dir = 'master.';

    }
    public function index(){
        $post = Post::all();
        $title ='Visi Misi  ';
        $recentPosts = Post::orderBy('publish_at', 'desc')->take(5)->get();
        $CategoryPost = Category::all();
     
        return view($this->view_dir.'visi', compact('title','post','recentPosts','CategoryPost'));
        
        // return view('master.post');
    }
    
    // public function index(){
    //     $title = 'struktur';
    //     return view('master.struktur',compact('title'));
    // }
    

    public function show(Post $post){
       
        $title ='Post Show ';
       
        $recentPosts = Post::orderBy('publish_at', 'desc')->take(5)->get();

        $CategoryPost = Category::all();

        

        return view('master.detail', compact( 'title','post', 'recentPosts','CategoryPost'));
        // return view($this->view_dir.'detail', compact('post'));
    }
}
