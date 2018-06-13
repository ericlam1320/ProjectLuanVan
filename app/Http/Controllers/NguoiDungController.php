<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function getDanhSach(){
    	return view('admin.pages.nguoidung.danhsach');
    }

    public function getThem(){
    	return view('admin.pages.nguoidung.them');
    }

    public function getSua(){
    	return view('admin.pages.nguoidung.sua');
    }
}
