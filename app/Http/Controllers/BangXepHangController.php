<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangXepHangController extends Controller
{
    public function getDanhSach(){
    	return view('admin.pages.bangxephang.danhsach');
    }

    public function getThem(){
    	return view('admin.pages.bangxephang.them');
    }

    public function getSua(){
    	return view('admin.pages.bangxephang.sua');
    }
}
