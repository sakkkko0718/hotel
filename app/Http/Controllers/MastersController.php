<?php

namespace App\Http\Controllers;

use App\Masters;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function index(Request $request){
        $item = Masters::all();
        return view('guests.index',['items'=> $item]);
    }
}
