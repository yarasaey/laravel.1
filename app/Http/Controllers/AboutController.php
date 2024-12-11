<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
//responsable for php code
class AboutController extends Controller
{
    public function index(){
        $site_data=Setting::first();
        return view('front.about',compact('site_data'));//send parameter
    }
}
