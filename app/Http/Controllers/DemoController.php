<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function upload(Request $request){
        echo $request->file('image')->store('uploads');
    }
}
