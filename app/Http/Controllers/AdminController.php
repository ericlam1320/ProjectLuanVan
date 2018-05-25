<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex(){
    	return view('admin.pages.admin.trangchu');
    }

    public function getDanhSach_BangXepHang(){
    	return view('admin.pages.admin.bangxephang.danhsach');
    }
}
