<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function __construct()
    {
        $this->view_dir = 'master.';

    }
    public function index(){
        $categories = Category::all();
        return view($this->view_dir.'categories', compact('categories'));
        // return view('master.post');
    }

    // public function show(Category $category){
    //     $category = Category::all();
    //     return view($this->view_dir.'category', compact('category'));
    //     // return view('master.post');
    // }

    public function show(Category $category){
        return view('master.category',[
           'title' => 'Posts Category',
           'post' => $category->post,
           'category' => $category->name
        ]);
      }
}
