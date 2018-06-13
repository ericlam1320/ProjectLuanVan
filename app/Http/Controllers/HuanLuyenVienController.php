<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HuanLuyenVienController extends Controller
{
    public function getHuanLuyenVien($id){
    	return view('huanluyenvien.pages.trangchu');
    }

    public function getThongTinCaNhan($id){
    	return view('huanluyenvien.pages.thongtincanhan');
    }
    public function getSuaThongTinCaNhan($id){
    	return view('huanluyenvien.pages.suathongtincanhan');
    }

    public function getThongBao($id){
        return view('huanluyenvien.pages.thongbao');
    }

    public function getYeuCau($id){
        return view('huanluyenvien.pages.yeucau');
    }

    public function getLichThiDau($id){
        return view('huanluyenvien.pages.lichthidau');
    }

    public function getKetQua($id){
        return view('huanluyenvien.pages.ketqua');
    }
}
