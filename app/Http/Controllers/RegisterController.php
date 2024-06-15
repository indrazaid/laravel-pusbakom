<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $title = "Form Rgistrasi";

        return view('admin.register',compact('title'));
    }

    public function store(Request $request){

        // return $request->all();
        $validatedData = $request->validate([
          
          'name' => 'required|max:255',
          'username' => 'required|min:3|max:255|unique:users',
          'email'=> 'required|email|unique:users',
          'password'=> 'required|min:3|max:255'


        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('succes','Registrasi Berhasil');
        return redirect('/login')->with('succes','Registrasi Berhasil');
        

        // dd('registrasi berhasil');
    }


}
