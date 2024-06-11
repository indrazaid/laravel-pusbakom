<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function __construct()
    {
        $this->view_dir = 'master.';

    }
    public function index(){
        $title ='Post Category';
        $categories = Category::all();
        return view($this->view_dir.'categories', compact('title','categories'));
        // return view('master.post');
    }

    // public function show(Category $category){
    //     $category = Category::all();
    //     return view($this->view_dir.'category', compact('category'));
    //     // return view('master.post');
    // }

    public function show(Category $category){
        // return view('master.category',[
        //    'title' => 'Posts Category',
        //    'post' => $category->post,
        //    'category' => $category->name
        // ]);
        $title ='Post Category';
        $post = $category->post;
        $category = $category->name;
        return view('master.category', compact('title','post','category'));
      }
}
