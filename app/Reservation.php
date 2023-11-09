<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primarykey = 'reservations_id';

    public function guest(){
        return $this->belongsTo('App\Guest','guest_id','guest_id');
    }
}
