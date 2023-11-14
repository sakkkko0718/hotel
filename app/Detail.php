<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $primarykey = 'detail_id';

    public function guest(){
        return $this->belongsTo('App\Guest','guest_id','guest_id');
    }

    public function room(){
        //中間テーブル、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー
        return $this->belongsToMany('App\Room','details','reservations_id','room_id');
    }
}
