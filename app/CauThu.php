<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauThu extends Model
{
    protected $table = 'cauthu';
	public $timestamps = false;

    public function NguoiDung(){
        return $this->belongsTo('App\NguoiDung', 'idNguoiDung', 'id');
    }
    public function ThanhTichCauThu(){
    	return $this->hasMany('App\ThanhTichCauThu', 'idCauThu', 'id');
    }
    public function ThongTinCauThuChanThuong(){
    	return $this->hasMany('App\ThongTinCauThuChanThuong', 'idCauThu', 'id');
    }

}
