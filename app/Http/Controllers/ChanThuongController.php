<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChanThuongController extends Controller
{
    public function getDanhSach(){
    	return view('nhanvienyte.pages.chanthuong.danhsach');
    }

    public function getThem(){
    	return view('nhanvienyte.pages.chanthuong.them');
    }

    public function getSua(){
    	return view('nhanvienyte.pages.chanthuong.sua');
    }
}
