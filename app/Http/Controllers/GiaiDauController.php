<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\GiaiDau;
use App\BangXepHang;
use App\TiSo;
use App\CauLacBo_GiaiDau;

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
            'tengiaidau'                =>      'required|
                                                 regex:/^[a-zA-Z0-9\s]+$/',

            'nambatdau'                 =>      'unique:giaidau,NamBatDauMuaGiai',

            'namketthuc'                =>      'unique:giaidau,NamKetThucMuaGiai'
        ], 
        [
            'tengiaidau.required'       =>      'Tên giải đấu không được để trống',
            'tengiaidau.regex'          =>      'Tên giải đấu chỉ gồm chữ và số',

            'nambatdau.unique'          =>      'Năm bắt đầu đã tồn tại',

            'namketthuc.unique'         =>      'Năm kết thúc đã tồn tại'
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
            $giaidau->MuaGiaiHienTai     	=       $request->muagiaihientai;
            $giaidau->save();
            return redirect()->route('DanhSachGiaiDau')->with('success', 'Thêm giải đấu thành công.');
        }
    }

    public function getXoa($id){
        $giaidau = GiaiDau::find($id);
        $bangxephang = BangXepHang::all();
        $caulacbo_giaidau = CauLacBo_GiaiDau::all();
        $tiso = TiSo::all();

        foreach($bangxephang as $bxh){
            if($giaidau->id == $bxh->idGiaiDau){
                return redirect()->back()->with('error', 'Tồn tại bảng xếp hạng trong giải đấu.');
            }
        }

        foreach($caulacbo_giaidau as $clbgd){
            if($giaidau->id == $clbgd->idGiaiDau){
                return redirect()->back()->with('error', 'Tồn tại câu lạc bộ trong giải đấu.');
            }
        }

        foreach($tiso as $ts){
            if($giaidau->id == $ts->idGiaiDau){
                return redirect()->back()->with('error', 'Tồn tại trận đấu trong giải đấu.');
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
            'tengiaidau'                =>      'required|
                                                 regex:/^[a-zA-Z0-9\s]+$/',

            'nambatdau'      			=> 		'unique:giaidau,NamBatDauMuaGiai,'.$id.',id',

            'namketthuc'      			=> 		'unique:giaidau,NamKetThucMuaGiai,'.$id.',id',
        ], 
        [
            'tengiaidau.required'       =>      'Tên giải đấu không được để trống',
            'tengiaidau.regex'          =>      'Tên giải đấu chỉ gồm chữ và số',

            'nambatdau.unique'          =>      'Năm bắt đầu đã tồn tại',

            'namketthuc.unique'         =>      'Năm kết thúc đã tồn tại'
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
            $giaidau->MuaGiaiHienTai     	=       $request->muagiaihientai;
            $giaidau->save();
            return redirect()->route('DanhSachGiaiDau')->with('success', 'Thêm giải đấu thành công.');
        }
    }
}
