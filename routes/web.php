<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[DemoController::class,'index']);

// another type of import

Route::get("/about",SingleActionController::class);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/register',[LoginController::class,'indexreg']);
Route::post('/register',[LoginController::class,'register']);

Route::group(["prefix"=>'/customer'],function(){
    Route::get('/',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/',[CustomerController::class,'submit']);
    Route::get('/view',[CustomerController::class,'view']);
    Route::get('/delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');
    Route::post('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
});

Route::get('/print',[DemoController::class,'index']);

Route::get("/upload",function(){
    return view("upload");
});
Route::post('/upload',[DemoController::class,'upload']);


Route::get('/{lang?}',function($lang=null){
    App::setlocale($lang);
    return view('home');
});