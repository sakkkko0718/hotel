<?php

namespace App\Http\Controllers;

use App\Guests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class GuestsController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('guest')->get();
        return view('guests.index',['items'=> $items]);
    }

}
