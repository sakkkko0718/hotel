<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $primarykey = 'master_id';

    // public static $rules = array(
    //     'room_name' => 'required',
    //     'imitation' => 'required'
    // );

    public function rooms(){
        return $this->hasMany('App\Room','master_id','master_id');
    }
}
