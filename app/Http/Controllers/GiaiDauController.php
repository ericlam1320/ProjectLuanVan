<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiaiDau;
use App\BangXepHang;

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
            'tengiaidau'                =>      'required',
            'nambatdau'                 =>      'unique:giaidau,NamBatDauMuaGiai',
            'namkethuc'                 =>      'unique:giaidau,NamKetThucMuaGiai'
        ], 
        [
            'tengiaidau.required'       =>      'Tên giải đấu không được để trống',
            'nambatdau.unique'          =>      'Năm bắt đầu đã tồn tại',
            'namkethuc.unique'          =>      'Năm kết thúc đã tồn tại'
        ]);

        //86400s = 1d
        // 2678400s = 1m

        if(strtotime($request->namketthuc) - strtotime($request->nambatdau) < 2678400*5 || strtotime($request->namketthuc) - strtotime($request->nambatdau) > 2678400*9) {
            return redirect()->route('ThemGiaiDau')->with('error', 'Sai thông tin Năm của giải đấu');
        }

        else{
            $giaidau = new GiaiDau;
            $giaidau->TenGiaiDau            =       $request->tengiaidau;
            $giaidau->NamBatDauMuaGiai      =       $request->nambatdau;
            $giaidau->NamKetThucMuaGiai     =       $request->namketthuc;
            $giaidau->save();
            return redirect()->route('DanhSachGiaiDau')->with('success', 'Thêm giải đấu thành công.');
        }
    }

    public function getXoa($id){
        $giaidau = GiaiDau::find($id);
        $bangxephang = BangXepHang::all();

        foreach($bangxephang as $bxh){
            if($giaidau->id == $bxh->idGiaiDau){
                return redirect()->back()->with('error', 'Tồn tại bảng xếp hạng trong giải đấu.');
            }
        }

        $giaidau->delete();
        return redirect()->route('DanhSachGiaiDau')->with('success', 'Xóa giải đấu thành công.');
    }

    public function getSua($id){
        $giaidau = GiaiDau::find($id);
    	return view('admin.pages.giaidau.sua', compact('giaidau'));
    }

    public function postSua($id, Request $request){
        $this->validate($request, [
            'tengiaidau'                =>      'required',
            'nambatdau'                 =>      'unique:giaidau,NamBatDauMuaGiai',
            'namkethuc'                 =>      'unique:giaidau,NamKetThucMuaGiai'
        ], 
        [
            'tengiaidau.required'       =>      'Tên giải đấu không được để trống',
            'nambatdau.unique'          =>      'Năm bắt đầu đã tồn tại',
            'namkethuc.unique'          =>      'Năm kết thúc đã tồn tại'
        ]);

        //86400s = 1d
        // 2678400s = 1m

        if(strtotime($request->namketthuc) - strtotime($request->nambatdau) < 2678400*5 || strtotime($request->namketthuc) - strtotime($request->nambatdau) > 2678400*9) {
            return redirect()->route('ThemGiaiDau')->with('error', 'Sai thông tin Năm của giải đấu');
        }

        else{
            $giaidau = GiaiDau::find($id);
            $giaidau->TenGiaiDau            =       $request->tengiaidau;
            $giaidau->NamBatDauMuaGiai      =       $request->nambatdau;
            $giaidau->NamKetThucMuaGiai     =       $request->namketthuc;
            $giaidau->save();
            return redirect()->route('DanhSachGiaiDau')->with('success', 'Thêm giải đấu thành công.');
        }
    }
}
