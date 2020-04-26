<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function index(){
    //     return view('admin/members/index');
    // }

    // public function all(){
    //     return view('admin/reservations/all');
    // }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        //return $members = Member::paginate(10);
        $customers = Customer::paginate(10);
        return view('admin/members/index', [
            'customers' => $customers
        ]);
    }
    public function delete($id){
        $customer = Customer::find($id);
        $customer ->delete();
        return redirect('/admin/members');
    }

}
