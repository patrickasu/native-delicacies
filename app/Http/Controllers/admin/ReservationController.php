<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $reservations = Reservation::paginate(10);
        return view('admin/reservations/all', [
            'reservations' => $reservations
        ]);
    }
    public function delete($id){
        $reservation = Reservation::find($id);
        $reservation ->delete();
        return redirect('/admin/reservations');
    }
}
