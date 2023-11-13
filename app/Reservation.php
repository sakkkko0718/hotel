<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('reservations_id');

    public static $rules = array (
        'guest_id' => 'required',
        'people' => 'required',
        'checkin' => 'required',
        'checkout' => 'required'
    );

    protected $primarykey = 'reservations_id';

    public function guest(){
        return $this->belongsTo('App\Guest','guest_id','guest_id');
    }
}
