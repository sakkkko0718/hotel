<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    protected $guarded = array('guest_id');

    public static $rules = array(
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );
}
