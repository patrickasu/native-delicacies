<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Customer;
use App\Reservation;
use App\GeneralSetting;
use App\FoodCategory;
use App\FoodItem;

class StaticPagesController extends Controller
{
    public function homepage(){
        $categories = FoodCategory::all();
        return view('welcome', [
            'categories' => $categories
           ]);
    }
    public function categoryMenu(){
        $categories = FoodCategory::all();
        return view('pages/category-menu', [
            'categories' => $categories
           ]);
    }
    public function menu($slug){
        $foodCategory = foodCategory::where('title', '=', $slug)->first();
        $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get();
       return view('pages/menu', [
           "foodItem" => ucfirst($slug),
           "foodItems" => $foodItems
       ]);
   }
    public function offers(){
        return view('pages/offers');
    }
    public function store(Request $request){
        //return request()->all();
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        $customer = new Customer;
        $customer->fname = request('fname');
        $customer->lname = request('lname');
        $customer->email = request('email');
        $customer->phone_number = request('phone_number');
        $customer->save();
        //return 'Thank You';
        return redirect('/')->with('status', 'Thank you we will get back to you with our latest deals and offers!!');
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function saveReservations(Request $request){
        //return request()->all();
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'guests_total' => 'required',
            'time' => 'required',
        ]);
        $reservation = new Reservation;
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number'); 
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();
        //return 'Thank You';
        return redirect('/')->with('status', 'Thank you. your reservation was made successfully!!');
    
    }
    public function contactUs(){
        return view('pages/contact');
    }
    public function aboutUs(){
        return view('pages/about');
    }
}
