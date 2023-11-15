<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primarykey = 'room_id';

    public function master(){
        return $this->belongsTo('App\Master','master_id','master_id');
    }

    public function reservations(){
        //中間テーブル、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー
        return $this->belongsToMany('App\Reservation','reservation_room','room_id','reservations_id');
    }
}
