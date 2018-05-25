<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function getDanhSach(){
    	return view('admin.pages.admin.nguoidung.danhsach');
    }

    public function getThem(){
    	return view('admin.pages.admin.nguoidung.them');
    }

    public function getSua(){
    	return view('admin.pages.admin.nguoidung.sua');
    }
}
