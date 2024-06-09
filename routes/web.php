<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LoginController;

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