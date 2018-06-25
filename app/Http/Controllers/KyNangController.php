<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\KyNang;
class KyNangController extends Controller
{
    public function getDanhSach(){
    	$kynang = KyNang::all();
    	return view('admin.pages.kynang.danhsach', compact('kynang'));
    }

    public function getThem(){
    	return view('admin.pages.kynang.them');
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'tenkynang'			=>		'required|unique:kynang,TenKyNang',
    		'chitiet'			=>		'required|unique:kynang,ChiTiet',
    	], 
    	[
    		'tenkynang.required'		=>		'Không được bỏ trống',
    		'tenkynang.unique'			=>		'Tên kỹ năng đã tồn tại',
    		'chitiet.required'			=>		'Không được bỏ trống',
    		'chitiet.unique'			=>		'Chi tiết đã tồn tại',

    	]);

    	$kynang = new KyNang();
    	$kynang->TenKyNang 	= 	$request->tenkynang;
    	$kynang->ChiTiet 	=	$request->chitiet;

    	$kynang->save();

    	return redirect()->route('DanhSachKyNang')->with('success','Thêm kỹ năng thành công');
    }

    public function getXoa($id){
        $kynang = KyNang::find($id);
        $kynang->delete();
        return redirect()->route('DanhSachKyNang')->with('success','Xoá kỹ năng thành công');
    }

    public function getSua($id){
    	$kynang = KyNang::find($id);
    	return view('admin.pages.kynang.sua', compact('kynang'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request, [
    		'tenkynang'			=>		'required',
    		'chitiet'			=>		'required',
    	], 
    	[
    		'tenkynang.required'		=>		'Không được bỏ trống',
    		'chitiet.required'			=>		'Không được bỏ trống',

    	]);

    	$kynang = KyNang::find($id);
    	$kynang->TenKyNang 	= 	$request->tenkynang;
    	$kynang->ChiTiet 	=	$request->chitiet;

    	$kynang->save();

    	return redirect()->route('DanhSachKyNang')->with('success','Cập nhật kỹ năng thành công');
    }
}
