<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangXepHangController extends Controller
{
    public function getDanhSach(){
    	return view('admin.pages.admin.bangxephang.danhsach');
    }

    public function getThem(){
    	return view('admin.pages.admin.bangxephang.them');
    }

    public function getSua(){
    	return view('admin.pages.admin.bangxephang.sua');
    }
}
