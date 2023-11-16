<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_id';

    public function master(){
        return $this->belongsTo('App\Master','master_id','master_id');
    }
}
