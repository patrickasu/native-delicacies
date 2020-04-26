<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodItem;
use App\FoodCategory;

class FoodItemsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function index(){
    //     return view('admin/food-items/index');
    // }

    // public function create(){
    //     return view('admin/food-items/create');
    // }

    // public function edit(){
    //     return view('admin/food-items/edit');
    // }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    // public function index(){
    //     return view('admin/food-items/all');
    // }

    // public function create(){
    //     return view('admin/food-items/create');
    // }
    // public function edit(){
    //     return view('admin/food-items/edit');
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $items = FoodItem::All();
        return view('admin/food-items/index', [
            'items' => $items
        ]);
    }

    public function create(){
        $categories = FoodCategory::All();
        return view('admin/food-items/create', [
            'categories' => $categories
        ]);
    }
    public function store(){
        //return request()->all();
        // request()->validator([
        //     'title' => ['required', 'string'],
        //     'description' => ['required', 'string'],
        //     'image_url' => ['required', 'string'],
        //     'price' => ['required', 'integer'],
        //     'category_id' => ['required', 'integer']
        // ]);
        $item = new FoodItem;
        $item->title = request('title');
        $item->ingredients = request('ingredients');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();
        return redirect('admin/food-items');
    }
    public function edit($id){
        $item = FoodItem::find($id);
        $categories = FoodCategory::All();
        return view('admin/food-items/edit', [
            'item' => $item,
            'categories' => $categories,
        ]);
    }
    public function update($id){
        // request()->validator([
        //     'title' => ['required', 'string'],
        //     'description' => ['required', 'string'],
        //     'image_url' => ['required', 'string'],
        //     'price' => ['required', 'integer'],
        //     'category_id' => ['required', 'integer']
        // ]);
        $item =  FoodItem::find($id);
        $item->title = request('title');
        $item->ingredients = request('ingredients');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();
        return redirect('admin/food-items');

    }
    public function delete($id){
        $item = FoodItem::find($id);
        $item ->delete();
        return redirect('/admin/food-items');
    }
}
