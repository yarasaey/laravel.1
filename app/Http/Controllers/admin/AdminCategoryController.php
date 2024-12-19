<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CreateCategoryRequest;


class AdminCategoryController extends Controller
{

    public function index(){
        $categories= Category::all();
//when return the view with data in web
        return view('admin.pages.category.index',compact('categories'));
    }
    public function create(){
        return view('admin.pages.category.create');
    }
    public function store(CreateCategoryRequest $request){


    }
        
    
}
