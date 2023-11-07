<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masters extends Model
{
    protected $guarded = array('master_id');

    public static $rules = array(
        'room_name' => 'required',
        'imitation' => 'required',
    );
}
