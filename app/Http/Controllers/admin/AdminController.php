<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Reservation;
use DB;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard(){
        $estimated_income_last_30days = DB::select(DB::raw('
        select
                (sum(guests_total) *2000) as total
            from reservations
            where created_at between curdate() - interval 30 day and curdate()
        '));
        //dd($estimated_income_last_30days[0]->total);
        //$estimated_income_last_30days = $estimated_income_last_30days[0]->total;
        
        $total_customers_last_30days = DB::select(DB::raw('
        select
                sum(guests_total) as total
            from reservations
            where created_at between curdate() - interval 30 day and curdate()
        '));
        $total_reservations_last_30days = DB::select(DB::raw('
        select
                count(*) as total
            from reservations
            where created_at between curdate() - interval 30 day and curdate()
        '));
        $total_employees_last_30days = DB::select(DB::raw('
            select count(*) as total
            from users
            where created_at between curdate() - interval 3 day and curdate()
            
        '));
        $latestRreservations = Reservation::where('guests_total', '>', 0)->limit(10)->orderBy('created_at', 'desc')->get();
        return view('admin/dashboard', [
            "estimated_income_last_30days" => "₦".$estimated_income_last_30days[0]->total,
            "total_customers_last_30days" => $total_customers_last_30days[0]->total,
            "total_reservations_last_30days" => $total_reservations_last_30days[0]->total,
            "total_employees_last_30days" => $total_employees_last_30days[0]->total,
            "latestRreservations" => $latestRreservations
        ]);
    }  
    public function getDailyRevenueLast30Days(){
        // return $estimated_income_daily_data = DB::select(DB::raw('
        // SELECT
        //     DATE_FORMAT(created_at, "%Y-%m-%d") as reserved_day,
        //     (sum(guests_total)*1000) as estimated_earnings,
        //     count(*) as total_reservations,
        //     sum(guests_total)
        //     FROM restaurant.reservations
        //     group by reserved_day desc;
        // '));
        return $estimated_income_daily_data = DB::select(DB::raw('
        SELECT
            DATE_FORMAT(created_at, "%Y-%m-%d") as x,
            (sum(guests_total)*1000) as y
            FROM reservations
            group by x desc;
        '));
    }
}
