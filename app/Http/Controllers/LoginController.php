<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){
        return view('form');
    }

    public function login(Request $request){
        $request->validate([
            'username'=> 'required | email',
            'password' => 'required'
        ]);
        echo "<pre>";
        print_r($request->all());
    }

    public function indexreg(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'fullname'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed',
            'password_confirmation'=> 'required'
        ]);
        echo "<pre>";
        print_r($request->all());
    }
}
