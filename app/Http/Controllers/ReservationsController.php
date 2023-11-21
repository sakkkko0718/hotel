<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index(Request $request){
        $item = Reservation::all();
        // dd($item[0]->room);
        // $data = Reservation::with('guests')->get();
        return view('reservations.index',['reservations'=> $item]);
    }

    public function add(Request $request){
        return view('reservations.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Reservation::$rules);
        $reservation = new Reservation();
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();
        return redirect('/reservations');
    }
}
