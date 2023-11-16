<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('guests','GuestsController@index');

Route::get('guests/add','GuestsController@add');
Route::post('guests/add','GuestsController@create');

// Route::get('guests/edit','GuestsController@edit');
// Route::post('guests/edit','GuestsController@update');

Route::get('masters','MastersController@index');

Route::get('rooms','RoomsController@index');

Route::get('reservations','ReservationsController@index');

Route::get('reservations/add','ReservationsController@add');
Route::post('reservations/add','ReservationsController@create');