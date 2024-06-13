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
        $filename = time() .'anil.'. $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('uploads',$filename);
    }
}
