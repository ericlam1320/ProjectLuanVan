<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\LichKham;
use App\Thuoc;
Use App\ToaThuoc;
use App\Thuoc_ToaThuoc;

class ToaThuocController extends Controller
{
    public function getDanhSach(){
    	$toathuoc = DB::SELECT('
                        SELECT
                        toathuoc.id,
                        toathuoc.ChanDoan,
                        toathuoc.NgayTaiKham,
                        lichkham.NoiDungDieuTri,
                        lichkham.NgayKham,
                        nguoidung.HoTen
                        FROM
                        toathuoc
                        INNER JOIN lichkham ON toathuoc.idLichKham = lichkham.id
                        INNER JOIN phacdodieutri ON lichkham.idPhacDoDieuTri = phacdodieutri.id
                        INNER JOIN thongtinchanthuong_cauthu ON thongtinchanthuong_cauthu.idPhacDoDieuTri = phacdodieutri.id
                        INNER JOIN cauthu ON thongtinchanthuong_cauthu.idCauThu = cauthu.id
                        INNER JOIN nguoidung ON cauthu.idNguoiDung = nguoidung.id




    		');

    	return view('nhanvienyte.pages.toathuoc.danhsach', compact('toathuoc'));
    }

    public function getThem(){
    	$lichkham = LichKham::with('ToaThuoc')->get();
    	$thuoc = Thuoc::all();
    	return view('nhanvienyte.pages.toathuoc.them', compact('lichkham','thuoc'));
    }

    public function postThem(Request $request){

    	$thuoc = DB::SELECT('
    				SELECT
					thuoc.id,
					thuoc.TenThuoc,
					thuoc.GhiChu
					FROM
					thuoc
    		');


    	$toathuoc = new ToaThuoc;
    	$toathuoc->NgayKham 		=		$request->ngaykham;
    	$toathuoc->NgayTaiKham 		=		$request->ngaytaikham;
    	$toathuoc->ChanDoan 		=		$request->chandoan;
    	$toathuoc->idLichKham 		=		$request->lichkham;
    	$toathuoc->save();

        foreach($request->lieuluong as $ll){
            if(isset($ll)){
                $lieuluong[] = $ll;
            }
        }
        
        foreach($request->soluong as $sl){
            if(isset($sl)){
                $soluong[] = $sl;
            }
        }

        foreach($request->ghichu as $gc){
            if(isset($gc)){
                $ghichu[] = $gc;
            }
        }

        $i = 0;
    	foreach($request->thuoc as $t){
    		$thuoc_toathuoc 					= 		new Thuoc_ToaThuoc;
    		$thuoc_toathuoc->idToaThuoc 		=		$toathuoc->id;
    		$thuoc_toathuoc->idThuoc 			=		$t;
    		$thuoc_toathuoc->SoLuong			=		$soluong[$i];
    		$thuoc_toathuoc->LieuLuong			=		$lieuluong[$i];
    		$thuoc_toathuoc->GhiChu				=		$ghichu[$i];            
    		$thuoc_toathuoc->save();
            $i++;
    	}

    	return redirect()->route('DanhSachToaThuoc')->with('success','Thêm toa thuốc thành công');
    }

    public function getXoa($id){
        $toathuoc = ToaThuoc::find($id);
        $toathuoc->delete();
        return redirect()->route('DanhSachToaThuoc')->with('success','Xoá toa thuốc thành công');   
    }

	public function getSua(){
	    return view('nhanvienyte.pages.toathuoc.sua');
	}
}
