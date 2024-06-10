<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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

Route::get('/customer',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class,'submit']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::get('/customer/delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');