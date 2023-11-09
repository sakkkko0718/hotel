<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $primarykey = 'guest_id';

    public function reservations(){
        return $this->hasMany('App\Reservation','guest_id','guest_id');
    }
}
