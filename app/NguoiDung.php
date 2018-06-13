<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $table = 'nguoidung';
	public $timestamps = false;

    public function HuanLuyenVien(){
        return $this->hasOne('App\HuanLuyenVien', 'idNguoiDung', 'id');
    }
    public function CauThu(){
        return $this->hasOne('App\CauThu', 'idNguoiDung', 'id');
    }
}
