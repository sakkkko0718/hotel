<?php

namespace App\Http\Controllers;

use App\Room;
use App\Reservation;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Request $request)
    {
        return view('details.index');
    }
}
