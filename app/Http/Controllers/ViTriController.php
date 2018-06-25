<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ViTri;

class ViTriController extends Controller
{
    public function getDanhSach(){
    	$vitri = ViTri::all();
    	return view('admin.pages.vitri.danhsach', compact('vitri'));
    }

    public function getThem(){
    	return view('admin.pages.vitri.them');
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'tenvitri'				=>		'required|unique:vitri,TenViTri',
    		'chuthich'				=>		'required|unique:vitri,ChuThich',
    	], 
    	[
    		'tenvitri.required'		=>		'Không được bỏ trống',
    		'tenvitri.unique'		=>		'Tên vị trí đã tồn tại',
    		'chuthich.required'		=>		'Không được bỏ trống',
    		'chuthich.unique'		=>		'Tên chú thích đã tồn tại',
    	]);

    	$vitri = new ViTri();
    	$vitri->TenViTri 	= 	$request->tenvitri;
    	$vitri->ChuThich 	= 	$request->chuthich;

    	$vitri->save();

    	return redirect()->route('DanhSachViTri')->with('success','Thêm vị trí thành công');
    }

    public function getXoa($id){
        $vitri = ViTri::find($id);
        $vitri->delete();
        return redirect()->route('DanhSachViTri')->with('success','Xoá vị trí thành công');
    }

    public function getSua($id){
    	$vitri = ViTri::find($id);
    	return view('admin.pages.vitri.sua', compact('vitri'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request, [
    		'tenvitri'				=>		'required',
    		'chuthich'				=>		'required',
    	], 
    	[
    		'tenvitri.required'		=>		'Không được bỏ trống',
    		'chuthich.required'		=>		'Không được bỏ trống',

    	]);

    	$vitri = ViTri::find($id);
    	$vitri->TenViTri 	= 	$request->tenvitri;
    	$vitri->ChuThich 	= 	$request->chuthich;

    	$vitri->save();

    	return redirect()->route('DanhSachViTri')->with('success','Cập nhật vị trí thành công');
    }
}
