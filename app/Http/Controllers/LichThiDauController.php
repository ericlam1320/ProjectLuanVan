<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LichThiDauController extends Controller
{
    public function getDanhSach(){
    	return view('admin.pages.admin.lichthidau.danhsach');
    }

    public function getThem(){
    	return view('admin.pages.admin.lichthidau.them');
    }

    public function getSua(){
    	return view('admin.pages.admin.lichthidau.sua');
    }
}
