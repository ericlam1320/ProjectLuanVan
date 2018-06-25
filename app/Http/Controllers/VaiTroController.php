<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\VaiTro;

class VaiTroController extends Controller
{
    public function getDanhSach(){
    	$vaitro = VaiTro::all();
    	return view('admin.pages.vaitro.danhsach', compact('vaitro'));
    }

    public function getThem(){
    	return view('admin.pages.vaitro.them');
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'tenvaitro'				=>		'required|unique:vaitro,TenVaiTro',
    		'mieuta'				=>		'required|unique:vaitro,MieuTa',
    	], 
    	[
    		'tenvaitro.required'	=>		'Không được bỏ trống',
    		'tenvaitro.unique'		=>		'Tên vai trò đã tồn tại',
    		'mieuta.required'		=>		'Không được bỏ trống',
    		'mieuta.unique'			=>		'Miêu tả đã tồn tại',
    	]);

    	$vaitro = new VaiTro();
    	$vaitro->TenVaiTro 	= 	$request->tenvaitro;
    	$vaitro->MieuTa 	= 	$request->mieuta;

    	$vaitro->save();

    	return redirect()->route('DanhSachVaiTro')->with('success','Thêm vai trò thành công');
    }

    public function getXoa($id){
        $vaitro = VaiTro::find($id);
        $vaitro->delete();
        return redirect()->route('DanhSachVaiTro')->with('success','Xoá vai trò thành công');
    }

    public function getSua($id){
    	$vaitro = VaiTro::find($id);
    	return view('admin.pages.vaitro.sua', compact('vaitro'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request, [
    		'tenvaitro'				=>		'required',
    		'mieuta'				=>		'required',
    	], 
    	[
    		'tenvaitro.required'	=>		'Không được bỏ trống',
    		'mieuta.required'		=>		'Không được bỏ trống',
    	]);

    	$vaitro = VaiTro::find($id);
    	$vaitro->TenVaiTro 	= 	$request->tenvaitro;
    	$vaitro->MieuTa 	= 	$request->mieuta;

    	$vaitro->save();

    	return redirect()->route('DanhSachVaiTro')->with('success','Cập nhật vai trò thành công');
    }
}
