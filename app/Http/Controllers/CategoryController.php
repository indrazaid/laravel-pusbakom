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
        $category = Category::all();
        return view($this->view_dir.'detail', compact('category'));
        // return view('master.post');
    }
}
