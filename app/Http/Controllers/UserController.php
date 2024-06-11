<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        // return view('master.users',[
        //     'title' => 'Posts Users',
        //     'post' => $user->post,
        //     'user' => $user->name
        //  ]);
       
         $title = 'Post Users';
         $post = $user->post;
         $user = $user->name;

         return view('master.users',compact('tilte','post','user'));

    }
}
