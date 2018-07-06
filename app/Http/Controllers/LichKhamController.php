<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\LichKham;
use App\PhacDoDieuTri;

class LichKhamController extends Controller
{
    public function getDanhSach(){
    	$lichkham = LichKham::all();
    	return view('nhanvienyte.pages.lichkham.danhsach', compact('lichkham'));
    }

    public function getThem(){
    	$phacdodieutri = PhacDoDieuTri::all();
    	return view('nhanvienyte.pages.lichkham.them', compact('phacdodieutri'));
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'diadiem'				=>		'required|
    								 		 regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀẾỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/'
    	], 
    	[
    		'diadiem.required'				=>		'Không được để trống',
    		'diadiem.regex'					=>		'Chỉ được nhập chữ và số'
    	]);

    	$date = date('Y-m-d');

    	if(strtotime($request->ngaykham) - strtotime($date) < 86400){
    		return redirect()->route('ThemLichKham')->with('error', 'Ngày khám không thể nhỏ hơn ngày hôm nay');
    	}

    	$lichkham = new LichKham();
    	$lichkham->NgayKham 			= 		$request->ngaykham;
    	$lichkham->CaKham 				= 		$request->cakham;
    	$lichkham->DiaDiem 				= 		$request->diadiem;
    	$lichkham->NoiDungDieuTri 		= 		$request->noidungdieutri;
    	$lichkham->idPhacDoDieuTri 		= 		$request->phacdodieutri;

    	$lichkham->save();
    	return redirect()->route('DanhSachLichKham')->with('success', 'Thêm lịch khám thành công');
    }

    public function getXoa($id){
    	$lichkham = LichKham::find($id);
    	$lichkham->delete();
    	return redirect()->route('DanhSachLichKham')->with('success', 'Xoá lịch khám thành công');
    }

	public function getSua($id){
		$lichkham = LichKham::find($id);
		$phacdodieutri = PhacDoDieuTri::all();
	    return view('nhanvienyte.pages.lichkham.sua', compact('lichkham','phacdodieutri'));
	}

	public function postSua($id, Request $request){
		$this->validate($request, [
    		'diadiem'				=>		'required|
    								 		 regex:/^[a-zA-Z0-9_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀẾỂưăạảấầẩẫậắằẳẵặẹẻẽềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/'
    	], 
    	[
    		'diadiem.required'				=>		'Không được để trống',
    		'diadiem.regex'					=>		'Chỉ được nhập chữ và số'
    	]);

    	// $date = date('Y-m-d');

    	// if(strtotime($request->ngaykham) - strtotime($date) < 86400){
    	// 	return redirect()->route('ThemLichKham')->with('error', 'Ngày khám không thể nhỏ hơn ngày hôm nay');
    	// }

    	$lichkham = LichKham::find($id);
    	$lichkham->NgayKham 			= 		$request->ngaykham;
    	$lichkham->CaKham 				= 		$request->cakham;
    	$lichkham->DiaDiem 				= 		$request->diadiem;
    	$lichkham->NoiDungDieuTri 		= 		$request->noidungdieutri;
    	$lichkham->idPhacDoDieuTri 		= 		$request->phacdodieutri;

    	$lichkham->save();
    	return redirect()->route('DanhSachLichKham')->with('success', 'Thêm lịch khám thành công');
	}

}
