<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LichThiDauController extends Controller
{
    public function getDanhSach(){
    	return view('admin.pages.lichthidau.danhsach');
    }

    public function getThem(){
    	return view('admin.pages.lichthidau.them');
    }

    public function getSua(){
    	return view('admin.pages.lichthidau.sua');
    }
}
