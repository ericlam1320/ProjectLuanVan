<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToaThuocController extends Controller
{
    public function getDanhSach(){
    	return view('nhanvienyte.pages.toathuoc.danhsach');
    }

    public function getThem(){
    	return view('nhanvienyte.pages.toathuoc.them');
    }

	public function getSua(){
	    return view('nhanvienyte.pages.toathuoc.sua');
	}
}
