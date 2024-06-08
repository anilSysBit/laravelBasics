<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){
        return view('form');
    }

    public function register(Request $request){
        print_r($request->all());
    }
}
