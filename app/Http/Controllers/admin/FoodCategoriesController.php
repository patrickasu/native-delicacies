<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\FoodCategory;

class FoodCategoriesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function index(){
    //     return view('admin/food-categories/index');
    // }

    // public function create(){
    //     return view('admin/food-categories/create');
    // }

    // public function edit(){
    //     return view('admin/food-categories/edit');
    // }

    public function index(){
        $categories = FoodCategory::All();
        return view('admin/food-categories/index', [
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('admin/food-categories/create', [
        ]);
    }
    public function store(){
        //return request()->all();
        // request()->validator([
        //     'title' => ['required', 'string'],
        //     'description' => ['required', 'string'],
        //     'image_url' => ['required', 'string']
        // ]);
        $category = new FoodCategory;
        $category->title = request('title');
        $category->description = request('description');
        $category->price = request('price');
        $category->image_url = request('image_url');
        $category->save();
        return redirect('admin/food-categories');
    }
    public function edit($id){
        $category = FoodCategory::find($id);
        return view('admin/food-categories/edit', [
            'category' => $category,
        ]);
    }
    public function update($id){
        $category =  FoodCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->price = request('price');
        $category->image_url = request('image_url');
        $category->save();
        return redirect('admin/food-categories');
        //return request();

    }
    public function delete($id){
        $category = FoodCategory::find($id);
        $category ->delete();
        return redirect('/admin/food-categories');
    }
}
