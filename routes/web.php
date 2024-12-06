<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactCntroller;
use App\Http\Controllers\PostController;
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

Route::get('/',[SiteController::class,'home']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactCntroller::class,'index']);
Route::post('/send-message',[ContactCntroller::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
