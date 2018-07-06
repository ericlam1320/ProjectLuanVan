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

    #------------------------------------------- TRANG CHỦ -------------------------------------------
    #-------------------------------------------------------------------------------------------------
    
    public function getIndex(){
        
        $CauThuTrongDoi = CauThu::with('nguoidung')->inRandomOrder()->limit(4)->get();

        $CauLacBo = CauLacBo::where('TenDayDu', 'Liverpool')->first();

        $KetQuaTranDauGanDay = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            caulacbo.HinhAnhCauLacBo_lon,
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
                                            WHERE tiso.TiSo IS NOT Null AND  trandau.TranDauCuaCLB='1'
                                            ORDER BY trandau.NgayThiDau DESC, tiso.id ASC
                                            LIMIT 2
                                        ");
        $CacTranDauTiepTheo = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            caulacbo.HinhAnhCauLacBo,
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
                                            WHERE tiso.TiSo IS Null AND  trandau.TranDauCuaCLB='1'
                                            ORDER BY trandau.NgayThiDau ASC, tiso.id ASC
                                            LIMIT 6 
                                        ");

        $TinTucMoiNhat = TinTuc::orderBy('id', 'DESC')->first();
        $CacTinTucKhac = TinTuc::orderBy('id', 'DESC')->skip(1)->take(4)->get();
        $NamHienTai = date('Y');$NamTruocDo=$NamHienTai-1;

        $BangXepHang = DB::SELECT("
                                    SELECT
                                    caulacbo.TenDayDu,
                                    caulacbo.HinhAnhCauLacBo,
                                    bangxephangclbgiaidau.Diem
                                    FROM
                                    bangxephangclbgiaidau
                                    INNER JOIN caulacbo ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                    INNER JOIN giaidau ON bangxephangclbgiaidau.idGiaiDau = giaidau.id
                                    WHERE giaidau.MuaGiaiHienTai='1'
                                    ORDER BY
                                    bangxephangclbgiaidau.Diem DESC,
                                    bangxephangclbgiaidau.HieuSo DESC,
                                    bangxephangclbgiaidau.BanThang DESC,
                                    bangxephangclbgiaidau.ChiSoFairplay ASC
                                    LIMIT 6
                                ");

        $ThongKeMuaGiai = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            caulacbo.HinhAnhCauLacBo,
                                            bangxephangclbgiaidau.SoTranThang,
                                            bangxephangclbgiaidau.SoTran,
                                            bangxephangclbgiaidau.BanThang,
                                            bangxephangclbgiaidau.BanThua
                                            FROM
                                            caulacbo
                                            INNER JOIN bangxephangclbgiaidau ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                            INNER JOIN giaidau ON bangxephangclbgiaidau.idGiaiDau = giaidau.id
                                            WHERE caulacbo.TenDayDu='Liverpool' AND giaidau.MuaGiaiHienTai='1'
                                        ");

    	return view('client.pages.trangchu', compact('KetQuaTranDauGanDay', 'CacTranDauTiepTheo', 'ThongKeMuaGiai', 'CauThuTrongDoi', 'CauLacBo', 'TinTucMoiNhat', 'CacTinTucKhac', 'BangXepHang'));
    }



    #------------------------------------------- LỊCH SỬ ---------------------------------------------
    #-------------------------------------------------------------------------------------------------
    
    public function getLichSu(){
        $CauLacBo = CauLacBo::where('TenDayDu', 'Liverpool')->first();
    	return view('client.pages.lichsu', compact('CauLacBo'));
    }



    #----------------------------------- LỊCH ĐẤU - KẾT QUẢ  -----------------------------------------
    #-------------------------------------------------------------------------------------------------
    
    public function getLichThiDau(){

        $TranDauTiepTheo = DB::SELECT("
                                            SELECT
                                            caulacbo.TenDayDu,
                                            caulacbo.HinhAnhCauLacBo_lon,
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
                                            WHERE tiso.TiSo IS Null AND  trandau.TranDauCuaCLB='1'
                                            ORDER BY trandau.NgayThiDau ASC, tiso.id ASC
                                            LIMIT 2
                                        ");

        $CacTranDauTiepTheo = DB::TABLE('caulacbo')
                                ->join('tiso', 'tiso.idCauLacBo', '=', 'caulacbo.id')
                                ->join('trandau', 'tiso.idTranDau', '=', 'trandau.id')
                                ->select('caulacbo.TenDayDu', 'caulacbo.HinhAnhCauLacBo', 'caulacbo.HinhAnhCauLacBo_lon', 'tiso.TiSo', 'trandau.VongDau', 'trandau.NgayThiDau', 'trandau.GioThiDau', 'trandau.DiaDiem', 'trandau.id')
                                ->where('tiso.TiSo', NULL)->where('trandau.TranDauCuaCLB', '1')
                                ->orderBy('trandau.NgayThiDau', 'ASC')->orderBy('tiso.id', 'ASC')
                                ->paginate(8);

        $NamHienTai = date('Y');$NamTruocDo=$NamHienTai-1;
        $BangXepHang = DB::SELECT("
                                    SELECT
                                    caulacbo.TenDayDu,
                                    caulacbo.HinhAnhCauLacBo,
                                    bangxephangclbgiaidau.Diem
                                    FROM
                                    bangxephangclbgiaidau
                                    INNER JOIN caulacbo ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                    INNER JOIN giaidau ON bangxephangclbgiaidau.idGiaiDau = giaidau.id
                                    WHERE giaidau.MuaGiaiHienTai='1'
                                    ORDER BY
                                    bangxephangclbgiaidau.Diem DESC,
                                    bangxephangclbgiaidau.HieuSo DESC,
                                    bangxephangclbgiaidau.BanThang DESC,
                                    bangxephangclbgiaidau.ChiSoFairplay ASC
                                    LIMIT 10
                                ");


    	return view('client.pages.lichthidau', compact('CacTranDauTiepTheo', 'TranDauTiepTheo', 'BangXepHang'));
    }

    public function getKetQua(){

        $CacTranDaDau = DB::TABLE('caulacbo')
                                ->join('tiso', 'tiso.idCauLacBo', '=', 'caulacbo.id')
                                ->join('trandau', 'tiso.idTranDau', '=', 'trandau.id')
                                ->select('caulacbo.TenDayDu', 'caulacbo.HinhAnhCauLacBo', 'caulacbo.HinhAnhCauLacBo_lon', 'tiso.TiSo', 'trandau.VongDau', 'trandau.NgayThiDau', 'trandau.GioThiDau', 'trandau.DiaDiem', 'trandau.id')
                                ->where('tiso.TiSo', '<>', NULL)->where('trandau.TranDauCuaCLB', '1')
                                ->orderBy('trandau.NgayThiDau', 'DESC')->orderBy('tiso.id', 'ASC')
                                ->paginate(8);

        $NamHienTai = date('Y');$NamTruocDo=$NamHienTai-1;
        $BangXepHang = DB::SELECT("
                                    SELECT
                                    caulacbo.TenDayDu,
                                    caulacbo.HinhAnhCauLacBo,
                                    bangxephangclbgiaidau.Diem
                                    FROM
                                    bangxephangclbgiaidau
                                    INNER JOIN caulacbo ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                    INNER JOIN giaidau ON bangxephangclbgiaidau.idGiaiDau = giaidau.id
                                    WHERE giaidau.MuaGiaiHienTai='1'
                                    ORDER BY
                                    bangxephangclbgiaidau.Diem DESC,
                                    bangxephangclbgiaidau.HieuSo DESC,
                                    bangxephangclbgiaidau.BanThang DESC,
                                    bangxephangclbgiaidau.ChiSoFairplay ASC
                                    LIMIT 10
                                ");

    	return view('client.pages.ketqua', compact('CacTranDaDau', 'BangXepHang'));
    }



    #------------------------------------------- BẢNG XẾP HẠNG ---------------------------------------
    #-------------------------------------------------------------------------------------------------

    public function getBangXepHang(){

        $GiaiDau = GiaiDau::where('TenGiaiDau', 'Premier league')->where('MuaGiaiHienTai','1')->first();
        $NamHienTai = date('Y');$NamTruocDo=$NamHienTai-1;
        $BangXepHang = DB::SELECT("
                                    SELECT
                                    caulacbo.TenDayDu,
                                    caulacbo.HinhAnhCauLacBo,
                                    bangxephangclbgiaidau.*
                                    FROM
                                    bangxephangclbgiaidau
                                    INNER JOIN caulacbo ON bangxephangclbgiaidau.idCauLacBo = caulacbo.id
                                    INNER JOIN giaidau ON bangxephangclbgiaidau.idGiaiDau = giaidau.id
                                    WHERE giaidau.MuaGiaiHienTai='1'
                                    ORDER BY
                                    bangxephangclbgiaidau.Diem DESC,
                                    bangxephangclbgiaidau.HieuSo DESC,
                                    bangxephangclbgiaidau.BanThang DESC,
                                    bangxephangclbgiaidau.ChiSoFairplay ASC
                                ");

    	return view('client.pages.bangxephang', compact('BangXepHang', 'GiaiDau'));
    }




    #------------------------------------------- THỐNG KÊ --------------------------------------------
    #-------------------------------------------------------------------------------------------------
    
    public function getThongKeDoiBong(){

        $GiaiDau = GiaiDau::where('TenGiaiDau', 'Premier league')->where('MuaGiaiHienTai','1')->first();

        $DanhSachThongKeCauThu = DB::SELECT("
                                                SELECT nguoidung.HoTen, nguoidung.HinhDaiDien,
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
                                                GROUP BY nguoidung.HoTen, nguoidung.HinhDaiDien
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
                                            WHERE caulacbo.TenDayDu='Liverpool' AND giaidau.MuaGiaiHienTai='1'
                                        ");

        if(empty($KetQuaDoiBongChart)){
            $KetQuaDoiBongChart[] = (object)['SoTran'=>3,'SoTranThang'=>1,'SoTranHoa'=>1,'SoTranThua'=>1];
        }

        $ThongKeCauThuGhiBanChart = DB::SELECT("
                                        SELECT
                                        nguoidung.HoTen,
                                        SUM(thanhtichcauthu.SoBanThang) AS SoBanThang
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
                                        SUM(thanhtichcauthu.SoKienTao) AS SoKienTao
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




    #------------------------------------------- CẦU THỦ ---------------------------------------------
    #-------------------------------------------------------------------------------------------------

    public function getCauThu(){

        $GiaiDau = GiaiDau::where('TenGiaiDau', 'Premier league')->where('MuaGiaiHienTai','1')->first();
        $DanhSachCauThu = CauThu::with('nguoidung')->get();
    	return view('client.pages.cauthu', compact('DanhSachCauThu', 'GiaiDau'));
    }
    public function getChiTietCauThu($idCauThu){

        $CauThu = DB::SELECT("
                                SELECT
                                nguoidung.*,
                                cauthu.*
                                FROM nguoidung
                                INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
                                WHERE cauthu.id='$idCauThu'
                            ");
        $Tuoi = 0;
        if(!empty($CauThu)){
            $Tuoi = (int)date('Y') - (int)date('Y', strtotime($CauThu[0]->NgaySinh));
        }
        $ThanhTichCauThu = DB::SELECT("
                                        SELECT
                                        AVG(thanhtichcauthu.DiemSo) as Diem,
                                        SUM(thanhtichcauthu.SoDuongChuyen) as SoDuongChuyen,
                                        COUNT(thanhtichcauthu.DiemSo) as SoTran,
                                        SUM(thanhtichcauthu.SoKienTao) as SoKienTao,
                                        SUM(thanhtichcauthu.SoBanThang) as SoBanThang,
                                        SUM(thanhtichcauthu.TheVang) as SoTheVang,
                                        SUM(thanhtichcauthu.TheDo) as SoTheDo
                                        FROM cauthu
                                        INNER JOIN thanhtichcauthu ON thanhtichcauthu.idCauThu = cauthu.id
                                        WHERE cauthu.id='$idCauThu'
                                    ");

        return view('client.pages.chitietcauthu', compact('CauThu', 'Tuoi', 'ThanhTichCauThu'));
    }



    #------------------------------------------- LIÊN HỆ ---------------------------------------------
    #-------------------------------------------------------------------------------------------------
    
    public function getLienHe(){
    	return view('client.pages.lienhe');
    }



    #------------------------------------------- TIN TỨC ---------------------------------------------
    #-------------------------------------------------------------------------------------------------

    public function getTinTuc(){
        $TinTuc = TinTuc::orderBy('NgayDang', 'DESC')->paginate(4);
    	return view('client.pages.tintuc', compact('TinTuc'));
    }
    public function getChiTietTinTuc($id){
        $TinTuc = TinTuc::find($id);
        return view('client.pages.chitiettintuc', compact('TinTuc'));
    }
}
