<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primarykey = 'room_id';

    public static $rules = array(
        'master_id' => 'required',
        'room_num' => 'required',
    );

    // public function getData(){
    //     return $this->room_id . $this->room_num;
    // }

    public function master(){
        return $this->belongsTo('App\Master','master_id','room_id');
    }
}
