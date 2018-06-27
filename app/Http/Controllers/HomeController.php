<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\BangXepHang;
use App\CauLacBo;
use App\GiaiDau;
use App\TranDau;
use App\TiSo;
use App\ThanhTichCauThu;
use App\CauThu;
use App\NguoiDung;
use App\TinTuc;

class HomeController extends Controller
{
    public function getIndex(){
        
        $CauThuTrongDoi = CauThu::with('nguoidung')->inRandomOrder()->limit(4)->get();
        $KetQuaTranDauGanDay = DB::SELECT("
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
                                            WHERE tiso.TiSo IS NOT Null
                                            ORDER BY trandau.NgayThiDau DESC
                                            LIMIT 2
                                        ");
        $CacTranDauTiepTheo = DB::SELECT("
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
                                            WHERE tiso.TiSo IS Null
                                            ORDER BY trandau.NgayThiDau ASC
                                            LIMIT 6 
                                        ");
        $ThongKeMuaGiai = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            bangxephangclbgiaidau.SoTranThang,
                                            bangxephangclbgiaidau.SoTran,
                                            bangxephangclbgiaidau.BanThang
                                            FROM
                                            caulacbo
                                            INNER JOIN bangxephangclbgiaidau ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                            WHERE caulacbo.TenDayDu='Liverpool'
                                        ");
        $NamHienTai = date('Y');$NamTruocDo=$NamHienTai-1;
        $SoCupTrongMuaGiai = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            caulacbo_giaidau.XepHang,
                                            giaidau.NamKetThucMuaGiai,
                                            count(caulacbo_giaidau.XepHang) as SoCup
                                            FROM
                                            caulacbo
                                            INNER JOIN caulacbo_giaidau ON caulacbo_giaidau.idCauLacBo = caulacbo.id
                                            INNER JOIN giaidau ON caulacbo_giaidau.idGiaiDau = giaidau.id
                                            WHERE caulacbo.TenDayDu = 'Liverpool' AND caulacbo_giaidau.XepHang = 1 AND YEAR(giaidau.NamKetThucMuaGiai)='$NamHienTai' AND YEAR(giaidau.NamBatDauMuaGiai)='$NamTruocDo'
                                            GROUP BY  caulacbo.TenDayDu, caulacbo_giaidau.XepHang, giaidau.NamKetThucMuaGiai
                                            ORDER BY giaidau.NamKetThucMuaGiai DESC
                                        ");

    	return view('client.pages.trangchu', compact('KetQuaTranDauGanDay', 'CacTranDauTiepTheo', 'ThongKeMuaGiai', 'SoCupTrongMuaGiai', 'CauThuTrongDoi'));
    }

    public function getLichSu(){
    	return view('client.pages.lichsu');
    }

    public function getLichThiDau(){
    	return view('client.pages.lichthidau');
    }

    public function getKetQua(){
    	return view('client.pages.ketqua');
    }

    public function getBangXepHang(){
        $GiaiDau = GiaiDau::where('TenGiaiDau', 'Premier league')->orderBy('NamBatDauMuaGiai','DESC')->first();
        $BangXepHang = BangXepHang::with('caulacbo')->where('idGiaiDau', $GiaiDau->id)->orderBy('Diem','DESC')->orderBy('HieuSo','DESC')->orderBy('BanThang', 'DESC')->orderBy('HieuSoFairPlay','ASC')->get();
    	return view('client.pages.bangxephang', compact('BangXepHang', 'GiaiDau'));
    }

    public function getThongKeDoiBong(){
        $GiaiDau = GiaiDau::where('TenGiaiDau', 'Premier league')->orderBy('NamBatDauMuaGiai','DESC')->first();
        $GiaiDauMuaHienTai =  $GiaiDau->NamBatDauMuaGiai;
        $GiaiDauMuaHienTai_ = $GiaiDau->NamKetThucMuaGiai; 
        $DanhSachThongKeCauThu = DB::SELECT("
                                                SELECT nguoidung.HoTen,
                                                ROUND(AVG(thanhtichcauthu.DiemSo),1) AS Diem,
                                                SUM(thanhtichcauthu.SoDuongChuyen) AS SoDuongChuyen,
                                                SUM(thanhtichcauthu.SoKienTao) AS SoKienTao,
                                                SUM(thanhtichcauthu.SoBanThang) AS SoBanThang,
                                                SUM(thanhtichcauthu.TheVang) AS TheVang,
                                                SUM(thanhtichcauthu.TheDo) AS TheDo,
                                                count(thanhtichcauthu.id) AS SoTran
                                                FROM cauthu
                                                INNER JOIN nguoidung ON cauthu.idNguoiDung = nguoidung.id
                                                INNER JOIN thanhtichcauthu ON thanhtichcauthu.idCauThu = cauthu.id
                                                GROUP BY nguoidung.HoTen
                                                ORDER BY SoTran DESC, Diem DESC
                                            ");

        $KetQuaDoiBongChart = DB::SELECT("
                                            SELECT
                                            giaidau.TenGiaiDau,
                                            giaidau.NamBatDauMuaGiai,
                                            giaidau.NamKetThucMuaGiai,
                                            bangxephangclbgiaidau.SoTran,
                                            bangxephangclbgiaidau.SoTranThang,
                                            bangxephangclbgiaidau.SoTranHoa,
                                            bangxephangclbgiaidau.SoTranThua,
                                            caulacbo.TenDayDu
                                            FROM caulacbo
                                            INNER JOIN bangxephangclbgiaidau ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                            INNER JOIN giaidau ON bangxephangclbgiaidau.idGiaiDau = giaidau.id
                                            WHERE caulacbo.TenDayDu='Liverpool' AND giaidau.NamBatDauMuaGiai='$GiaiDauMuaHienTai' AND giaidau.NamKetThucMuaGiai='$GiaiDauMuaHienTai_'
                                        ");
        if(empty($KetQuaDoiBongChart)){
            $KetQuaDoiBongChart[] = (object)['SoTran'=>1,'SoTranThang'=>1,'SoTranHoa'=>1,'SoTranThua'=>1];
        }

        $ThongKeCauThuGhiBanChart = DB::SELECT("
                                        SELECT
                                        nguoidung.HoTen,
                                        Sum(thanhtichcauthu.SoBanThang) AS SoBanThang
                                        FROM cauthu
                                        INNER JOIN nguoidung ON cauthu.idNguoiDung = nguoidung.id
                                        INNER JOIN thanhtichcauthu ON thanhtichcauthu.idCauThu = cauthu.id
                                        GROUP BY nguoidung.HoTen
                                        ORDER BY SoBanThang DESC
                                        LIMIT 6
                                    ");
        foreach ($ThongKeCauThuGhiBanChart as $ThongKe){
            $CauThuGhiBanChart[] = $ThongKe->HoTen;
            $SoBanThangChart[] = $ThongKe->SoBanThang;
        }
        $CauThuGhiBanChart = json_encode($CauThuGhiBanChart);
        $SoBanThangChart = json_encode($SoBanThangChart);

        $ThongKeCauThuKienTaoChart = DB::SELECT("
                                        SELECT
                                        nguoidung.HoTen,
                                        Sum(thanhtichcauthu.SoKienTao) AS SoKienTao
                                        FROM cauthu
                                        INNER JOIN nguoidung ON cauthu.idNguoiDung = nguoidung.id
                                        INNER JOIN thanhtichcauthu ON thanhtichcauthu.idCauThu = cauthu.id
                                        GROUP BY nguoidung.HoTen
                                        ORDER BY SoKienTao DESC
                                        LIMIT 6
                                    ");
        foreach ($ThongKeCauThuKienTaoChart as $ThongKe){
            $CauThuKienTaoChart[] = $ThongKe->HoTen;
            $SoKienTaoChart[] = $ThongKe->SoKienTao;
        }
        $CauThuKienTaoChart = json_encode($CauThuKienTaoChart);
        $SoKienTaoChart = json_encode($SoKienTaoChart);

        return view('client.pages.thongkedoibong', compact('DanhSachThongKeCauThu', 'GiaiDau' , 'KetQuaDoiBongChart', 'CauThuGhiBanChart', 'SoBanThangChart' , 'CauThuKienTaoChart', 'SoKienTaoChart'));
    }

    public function getCauThu(){
    	return view('client.pages.cauthu');
    }
    public function getChiTietCauThu(){
        return view('client.pages.chitietcauthu');
    }

    public function getLienHe(){
    	return view('client.pages.lienhe');
    }

    public function getTinTuc(){
        $TinTuc = TinTuc::orderBy('NgayDang', 'DESC')->get();
    	return view('client.pages.tintuc', compact('TinTuc'));
    }
    public function getChiTietTinTuc($id){
        $TinTuc = TinTuc::find($id);
        return view('client.pages.chitiettintuc', compact('TinTuc'));
    }
}
