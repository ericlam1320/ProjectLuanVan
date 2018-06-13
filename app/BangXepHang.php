<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BangXepHang extends Model
{
    protected $table = 'bangxephang';
	public $timestamps = false;

    public function GiaiDau(){
        return $this->belongsTo('App\GiaiDau', 'idGiaiDau', 'id');
    }
    public function CauLacBo(){
        return $this->belongsToMany('App\CauLacBo', 'bangxephang_caulacbo', 'idCauLacBo', 'idBangXepHang');
    }
}
