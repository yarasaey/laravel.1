<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller

{
    public function home(){
        $posts=Post::with('user')->take(10)->get();
        return view('front.home',['posts'=>$posts]);
    }
}
