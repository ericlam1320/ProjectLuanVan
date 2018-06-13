<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LichKhamController extends Controller
{
    public function getDanhSach(){
    	return view('nhanvienyte.pages.lichkham.danhsach');
    }

    public function getThem(){
    	return view('nhanvienyte.pages.lichkham.them');
    }

	public function getSua(){
	    return view('nhanvienyte.pages.lichkham.sua');
	}

}
