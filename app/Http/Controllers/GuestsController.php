<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;

class GuestsController extends Controller
{
    public function index(Request $request)
    {
        $item = Guest::all();
        return view('guests.index', ['guests' => $item]);
    }

    public function add(Request $request)
    {
        return view('guests.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Guest::$rules);
        $guest = new Guest;
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return redirect('/guests');
    }
}
