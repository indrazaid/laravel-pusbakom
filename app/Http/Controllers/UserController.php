<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        return view('master.users',[
            'title' => 'Posts Users',
            'post' => $user->post,
            'user' => $user->name
         ]);
    }
}
