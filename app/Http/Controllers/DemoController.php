<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;
use App\Models\Customer;
use App\Models\Post;

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



    public function related(){
        // echo "related";
        $posts = Customer::find(6)->posts->toArray();
        echo "<pre>";
        print_r($posts);

    }
}
