<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Request $request)
    {
        $item = Detail::all();
        return view('details.index',['details'=> $item]);
    }
}
