<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Thuoc;
Use App\ToaThuoc;
use App\Thuoc_ToaThuoc;

class ToaThuocController extends Controller
{
    public function getDanhSach(){
    	$toathuoc = DB::SELECT('
    					SELECT
						toathuoc.NgayKham,
						toathuoc.ChanDoan,
						thuoc.TenThuoc,
						toathuoc_thuoc.SoLuong,
						toathuoc_thuoc.LieuLuong,
						toathuoc_thuoc.GhiChu,
						toathuoc.NgayTaiKham
						FROM
						toathuoc
						INNER JOIN toathuoc_thuoc ON toathuoc_thuoc.idToaThuoc = toathuoc.id
						INNER JOIN thuoc ON toathuoc_thuoc.idThuoc = thuoc.id

    		');
    	return view('nhanvienyte.pages.toathuoc.danhsach', compact('toathuoc'));
    }

    public function getThem(){
    	return view('nhanvienyte.pages.toathuoc.them');
    }

	public function getSua(){
	    return view('nhanvienyte.pages.toathuoc.sua');
	}
}
