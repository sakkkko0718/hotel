<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index(Request $request){
        $item = Reservation::all();
        // $data = Reservation::with('guests')->get();
        return view('reservations.index',['reservations'=> $item]);
    }

    public function add(Request $request){
        return view('reservations.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Reservation::$rules);
        $guest = new Reservation();
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return redirect('/reservations');
    }
}
