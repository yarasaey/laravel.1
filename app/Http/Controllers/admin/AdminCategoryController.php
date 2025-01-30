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
    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Image upload logic
    $img = $data['image'];
    $ext = $img->getClientOriginalExtension();
    $image_name = "category-" . rand(10000, 1000000) . "." . $ext;

    $img->move(public_path('admin/assets/img/categories'), $image_name);

    $data['image'] = $image_name;

  if( Category::create($data)){
    toastr()->success("category created successfully");
    return to_route('category.index');
    // Display a success toast with no title

  }}
  public function destroy(Category $category){
    
    $category->delete();
    return to_route("category.index")->with('Category was deleted successfully');
  }
}

//     public function store(CreateCategoryRequest $request){
// //the request that validated
//        $data =$request->validate();
//        //image logic
//        $img=$data['image'];
//        $ext=$img->getClientOriginalExtension();
//        $image_name="category-".rand(10000,1000000).".".$ext;
//       $img->move(public_path('admin/assets/img/categories'),$image_name);

// $data['image']=$image_name;
// Category::create($data);
//     }
        
    

