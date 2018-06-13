<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use DB;

use App\NguoiDung;
use App\CauThu;
use App\ChanThuong;
use App\ThongTinChanThuong;
use App\PhacDoDieuTri;
use App\LichKham;
use App\ToaThuoc;
use App\Thuoc_ToaThuoc;
use App\Thuoc;

class CauThuController extends Controller
{
    public function getCauThu($tenCauThu){
    	return view('cauthu.pages.trangchu', compact('tenCauThu'));
    }

    public function getThongTinCaNhan($tenCauThu){
    	return view('cauthu.pages.thongtincanhan', compact('tenCauThu'));
    }
    public function getSuaThongTinCaNhan($tenCauThu){
    	return view('cauthu.pages.suathongtincanhan', compact('tenCauThu'));
    }

    public function getLichLuyenTap($tenCauThu){
        $CauThu = '1';
        $LichLuyenTap = DB::SELECT("
                                        SELECT
                                        nguoidung.HoTen,
                                        giaotrinhtap.TenBaiTap,
                                        giaotrinhtap.NoiDungBaiTap,
                                        lichluyentap.NgayLuyenTap,
                                        lichluyentap.GioLuyenTap,
                                        lichluyentap.DiaDiem
                                        FROM lichluyentap
                                        INNER JOIN giaotrinh_luyentap_cauthu ON giaotrinh_luyentap_cauthu.idLichLuyenTap = lichluyentap.id
                                        INNER JOIN giaotrinhtap ON giaotrinh_luyentap_cauthu.idGiaoTrinhTap = giaotrinhtap.id
                                        INNER JOIN cauthu ON giaotrinh_luyentap_cauthu.idCauThu = cauthu.id
                                        INNER JOIN nguoidung ON cauthu.idNguoiDung = nguoidung.id
                                        WHERE cauthu.id = '$CauThu'
                                    ");
        $LichLuyenTap_DanhSach = [];
        foreach($LichLuyenTap as $lich){
            $LichLuyenTap_DanhSach[] = Calendar::event(
                $lich->TenBaiTap,
                false,  
                new \Datetime($lich->NgayLuyenTap.$lich->GioLuyenTap),
                new \Datetime($lich->NgayLuyenTap)
            ); 
        }
        $LichLuyenTap = Calendar::addEvents($LichLuyenTap_DanhSach);
    	return view('cauthu.pages.lichluyentap', compact('tenCauThu', 'LichLuyenTap'));
    }

    public function getDoiHinhChienThuat($tenCauThu){
        $TranDauTiepTheo = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            tiso.TiSo,
                                            trandau.VongDau,
                                            trandau.NgayThiDau,
                                            trandau.GioThiDau,
                                            trandau.DiaDiem,
                                            trandau.id
                                            FROM
                                            caulacbo
                                            INNER JOIN tiso ON tiso.idCauLacBo = caulacbo.id
                                            INNER JOIN trandau ON tiso.idTranDau = trandau.id
                                            WHERE tiso.TiSo IS NULL
                                            ORDER BY trandau.NgayThiDau ASC
                                            LIMIT 2
                                        ");
        if(!empty($TranDauTiepTheo)){
            $idTranDau = $TranDauTiepTheo[0]->id;
            $DoiHinhChienThuat = DB::SELECT("
                                                SELECT
                                                doihinh.TenDoiHinh,
                                                chienthuat.TenChienThuat,
                                                chienthuat.NoiDungChienThuat,
                                                trandau.VongDau
                                                FROM
                                                trandau
                                                INNER JOIN doihinh ON trandau.idDoiHinh = doihinh.id
                                                INNER JOIN chienthuat ON trandau.idChienThuat = chienthuat.id
                                                WHERE trandau.id = '$idTranDau'
                                            ");
            $CauThuRaSan = DB::SELECT("
                                        SELECT
                                        nguoidung.HoTen,
                                        cauthu.SoAo,
                                        cauthu.id,
                                        vitri.TenViTri,
                                        doihinh.TenDoiHinh
                                        FROM
                                        nguoidung
                                        INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
                                        INNER JOIN vitri_cauthu_trandau ON vitri_cauthu_trandau.idCauThu = cauthu.id
                                        INNER JOIN vitri ON vitri_cauthu_trandau.idViTri = vitri.id
                                        INNER JOIN trandau ON vitri_cauthu_trandau.idTranDau = trandau.id
                                        INNER JOIN doihinh ON trandau.idDoiHinh = doihinh.id
                                        WHERE trandau.id = '$idTranDau'
                                    ");
            $VaiTroCauThu = DB::SELECT("
                                        SELECT
                                        vaitro.TenVaiTro,
                                        cauthu.id
                                        FROM
                                        cauthu
                                        INNER JOIN vaitro_cauthu_trandau ON vaitro_cauthu_trandau.idCauThu = cauthu.id
                                        INNER JOIN vaitro ON vaitro_cauthu_trandau.idVaiTro = vaitro.id
                                        INNER JOIN trandau ON vaitro_cauthu_trandau.idTranDau = trandau.id
                                        WHERE trandau.id = '$idTranDau'
                                    ");
            return view('cauthu.pages.doihinhchienthuat', compact('tenCauThu', 'DoiHinhChienThuat', 'TranDauTiepTheo', 'CauThuRaSan', 'VaiTroCauThu'));
        }
        return view('cauthu.pages.doihinhchienthuat', compact('tenCauThu', 'TranDauTiepTheo'));
    }

    public function getSucKhoe($tenCauThu){
        $CauThu = '1'; // -- Người đang đăng nhập
        $LichSuChanThuong = DB::SELECT("
                                        SELECT
                                        thongtinchanthuong_cauthu.ngaychanthuong AS NgayChanThuong,
                                        thongtinchanthuong_cauthu.NgayHoiPhuc AS NgayHoiPhuc,
                                        thongtinchanthuong_cauthu.TinhTrangChanThuong,
                                        chanthuong.TenChanThuong,
                                        DATEDIFF(NgayHoiPhuc,NgayChanThuong) AS TongNgay
                                        FROM
                                        cauthu
                                        INNER JOIN thongtinchanthuong_cauthu ON thongtinchanthuong_cauthu.idCauThu = cauthu.id
                                        INNER JOIN chanthuong ON thongtinchanthuong_cauthu.idChanThuong = chanthuong.id
                                        WHERE cauthu.id = '$CauThu'
                                        ORDER BY thongtinchanthuong_cauthu.ngaychanthuong DESC
                                    ");
        $LichKham = DB::SELECT("
                                    SELECT
                                    chanthuong.TenChanThuong,
                                    lichkham.NoiDungDieuTri,
                                    thongtinchanthuong_cauthu.TinhTrangChanThuong,
                                    lichkham.NgayKham,
                                    lichkham.id
                                    FROM
                                    cauthu
                                    INNER JOIN thongtinchanthuong_cauthu ON thongtinchanthuong_cauthu.idCauThu = cauthu.id
                                    INNER JOIN chanthuong ON thongtinchanthuong_cauthu.idChanThuong = chanthuong.id
                                    INNER JOIN phacdodieutri ON thongtinchanthuong_cauthu.idPhacDoDieuTri = phacdodieutri.id
                                    INNER JOIN lichkham ON lichkham.idPhacDoDieuTri = phacdodieutri.id
                                    WHERE cauthu.id = '$CauThu' AND thongtinchanthuong_cauthu.TinhTrangChanThuong='1'
                                    ORDER BY lichkham.NgayKham
                                ");
        if($LichKham){
            foreach($LichKham as $lich) {
                $ToaThuoc[] = ToaThuoc::where('idLichKham', $lich->id)->get();
            }
        }
        if($ToaThuoc){
            $stt=1;
            $Thuoc=[];
            foreach($ToaThuoc as $toathuoc) {
                if(!empty($ToaThuoc[$stt-1][0])){
                    $idToaThuoc = $ToaThuoc[$stt-1][0]->id;
                    $Thuoc[] = DB::SELECT("
                                            SELECT
                                            toathuoc.id,
                                            thuoc.TenThuoc,
                                            toathuoc_thuoc.SoLuong,
                                            toathuoc_thuoc.LieuLuong,
                                            toathuoc_thuoc.GhiChu
                                            FROM
                                            toathuoc
                                            INNER JOIN toathuoc_thuoc ON toathuoc_thuoc.idToaThuoc = toathuoc.id
                                            INNER JOIN thuoc ON toathuoc_thuoc.idThuoc = thuoc.id
                                            WHERE toathuoc.id='$idToaThuoc'
                                        ");
                }
                ++$stt;
            }
        }
        
        return view('cauthu.pages.suckhoe', compact('tenCauThu', 'LichSuChanThuong', 'LichKham', 'ToaThuoc', 'Thuoc'));
    }

    public function getThongBao($tenCauThu){
        return view('cauthu.pages.thongbao', compact('tenCauThu'));
    }

    public function getYeuCau($tenCauThu){
        return view('cauthu.pages.yeucau', compact('tenCauThu'));
    }

    public function getLichThiDau($tenCauThu){
        return view('cauthu.pages.lichthidau', compact('tenCauThu'));
    }

    public function getKetQua($tenCauThu){
        return view('cauthu.pages.ketqua', compact('tenCauThu'));
    }
}
