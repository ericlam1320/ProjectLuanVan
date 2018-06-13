<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiaiDau;

class GiaiDauController extends Controller
{
    public function getDanhSach(){
    	$giaidau = GiaiDau::all();
    	return view('admin.pages.giaidau.danhsach', compact('giaidau'));
    }

    public function getThem(){
    	return view('admin.pages.giaidau.them');
    }

    public function postThem(Request $request){
        $this->validate($request, [
            'tengiaidau'=>'required'
        ], 
        [
            'tengiaidau.required'=>'Tên giải đấu không được để trống'
        ]);

        $giaidau = new GiaiDau;
        $giaidau->TenGiaiDau            =       $request->tengiaidau;
        $giaidau->NamBatDauMuaGiai      =       $request->nambatdau;
        $giaidau->NamKetThucMuaGiai     =       $request->namketthuc;
        $giaidau->save();

        return redirect()->route('DanhSachGiaiDau')->with('success', 'Thêm giải đấu thành công.');
    }

    public function getXoa($id){
        $giaidau = GiaiDau::find($id);
        $giaidau->delete();
        return redirect()->route('DanhSachGiaiDau')->with('success', 'Xóa giải đấu thành công.');
    }

    public function getSua($id){
        $giaidau = GiaiDau::find($id);
    	return view('admin.pages.giaidau.sua', compact('giaidau'));
    }

    public function postSua($id, Request $request){
        $this->validate($request, [
            'tengiaidau'=>'required'
        ], 
        [
            'tengiaidau.required'=>'Tên giải đấu không được để trống'
        ]);

        $giaidau = GiaiDau::find($id);
        $giaidau->TenGiaiDau            =       $request->tengiaidau;
        $giaidau->NamBatDauMuaGiai      =       $request->nambatdau;
        $giaidau->NamKetThucMuaGiai     =       $request->namketthuc;
        $giaidau->save();

        return redirect()->route('DanhSachGiaiDau')->with('success', 'Cập nhật giải đấu thành công.');
    }
}
