<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactCntroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminHomeController;


/*use App\Http\Controllers\SiteController;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//handle any request 
//responsable for any request from url post or get
//return view or function 
//call and import controller

Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactCntroller::class,'index']);
Route::post('/send-message',[ContactCntroller::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post}',[PostController::class,'show']);


Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'storeuser'])->name('store.user');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginUser'])->name('login.user');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

//
Route::get('/admin-home',[AdminHomeController::class,'index'])->name('admin.home');

// Route::get('/', function () {
//     return view('welcome');
// });
