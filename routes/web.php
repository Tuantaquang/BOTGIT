<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/infomation',[HomeController::class,'infomation'])->name('infomation');

Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/login', [UserController::class,'post_login'])->name('post_login');
Route::get('/logout', [UserController::class,'logout'])->name('logout');

Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('/register', [UserController::class,'create_account'])->name('create_account');

Route::get('/add-product',[ProductController::class,'add_product'])->name('add_product');
Route::post('/add-product',[ProductController::class,'save_product'])->name('save_product');