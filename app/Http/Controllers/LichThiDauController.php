<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\TranDau;
use App\GiaiDau;
use App\CauLacBo;
use App\TiSo;
use App\BangXepHang;

class LichThiDauController extends Controller
{
    public function getDanhSach(){
    	$lichthidau = DB::SELECT("
    								SELECT
                                    trandau.VongDau,
                                    caulacbo.TenDayDu,
                                    trandau.NgayThiDau,
                                    trandau.GioThiDau,
                                    trandau.DiaDiem,
                                    trandau.id,
                                    tiso.idCauLacBo,
                                    tiso.TiSo,
                                    caulacbo.HinhAnhCauLacBo
                                    FROM
                                    trandau
                                    INNER JOIN tiso ON tiso.idTranDau = trandau.id
                                    INNER JOIN caulacbo ON tiso.idCauLacBo = caulacbo.id
                                    ORDER BY tiso.id ASC
    							");
    	return view('admin.pages.lichthidau.danhsach', compact('lichthidau'));
    }

    public function getThem(){
        $giaidau = GiaiDau::all();
        $caulacbo = CauLacBo::all();
        $vongdau = TranDau::orderBy('id', 'DESC')->first();

    	return view('admin.pages.lichthidau.them', compact('caulacbo','vongdau','giaidau'));
    }

    public function postThem(Request $request){
        if($request->doia == 'macdinh'|| $request->doib == 'macdinh'){
            return redirect()->back()->with('error','Bạn chưa chọn đội bóng.');
        }
        if($request->doib == $request->doia){
            return redirect()->back()->with('error','Lịch thi đấu không được trùng câu lạc bộ.');
        }
        if($request->diadiem == 'macdinh'){
            return redirect()->back()->with('error','Bạn chưa chọn sân vận động.');
        }
        if($request->giaidau == 'macdinh'){
            return redirect()->back()->with('error','Bạn chưa chọn giải đấu.');
        }
        if($request->giothidau > 19 || $request->giothidau < 14){
            return redirect()->back()->with('error','Giờ thi đấu không đúng quy định');
        }
        if(strtotime($request->ngaythidau) < strtotime('Y-m-d')){
            return redirect()->back()->with('error','Ngày thi đấu không đúng quy định');
        }
        if($request->vongdau > 38 || $request->vongdau < 1){
            return redirect()->back()->with('error','Vòng đấu không đúng quy định');
        }

        $lichthidau = new TranDau();
        $lichthidau->VongDau            =       $request->vongdau;
        $lichthidau->NgayThiDau         =       $request->ngaythidau;
        $lichthidau->GioThiDau          =       $request->giothidau;
        $lichthidau->DiaDiem            =       $request->diadiem;
        $lichthidau->save();

        $tiso1 = new TiSo();
        $tiso1->idCauLacBo = $request->doia;
        $tiso1->idTranDau = $lichthidau->id;
        $tiso1->idGiaiDau = $request->giaidau;
        $tiso1->save();

        $tiso2 = new TiSo();
        $tiso2->idCauLacBo = $request->doib;
        $tiso2->idTranDau = $lichthidau->id;
        $tiso2->idGiaiDau = $request->giaidau;
        $tiso2->save();


        return redirect()->route('DanhSachLichThiDau')->with('success','Thêm lịch thi đấu thành công');

    }

    public function getXoa($id){
        $lichthidau = TranDau::find($id);
        $lichthidau->delete();
        return redirect()->route('DanhSachLichThiDau')->with('success','Xoá lịch thi đấu thành công');
    }

    public function getSua($id){
        $giaidau = GiaiDau::all();
        $tiso2 = TiSo::find($id);
        $caulacbo = CauLacBo::all();
        $tiso = TiSo::where('idTranDau', $id)->get();
        $vongdau = TranDau::orderBy('id', 'DESC')->first();
        $trandau = TranDau::find($id);

    	return view('admin.pages.lichthidau.sua', compact('caulacbo', 'vongdau', 'trandau', 'tiso','giaidau','tiso2'));
    }

    public function postSua($id, Request $request){
        if($request->doia == 'macdinh'|| $request->doib == 'macdinh'){
            return redirect()->back()->with('error','Bạn chưa chọn đội bóng.');
        }
        if($request->doib == $request->doia){
            return redirect()->back()->with('error','Lịch thi đấu không được trùng câu lạc bộ.');
        }
        if($request->diadiem == 'macdinh'){
            return redirect()->back()->with('error','Bạn chưa chọn sân vận động.');
        }
        if($request->giothidau > 19 || $request->giothidau < 14){
            return redirect()->back()->with('error','Giờ thi đấu không đúng quy định');
        }
        if(strtotime($request->ngaythidau) < strtotime('Y-m-d')){
            return redirect()->back()->with('error','Ngày thi đấu không đúng quy định');
        }
        if($request->vongdau > 38 || $request->vongdau < 1){
            return redirect()->back()->with('error','Vòng đấu không đúng quy định');
        }

        $lichthidau = TranDau::find($id);
        $lichthidau->VongDau            =       $request->vongdau;
        $lichthidau->NgayThiDau         =       $request->ngaythidau;
        $lichthidau->GioThiDau          =       $request->giothidau;
        $lichthidau->DiaDiem            =       $request->diadiem;
        $lichthidau->save();

        $tisoID = TiSo::where('idTranDau',$id)->get();

        $tiso1 = TiSo::find($tisoID[0]->id);
        $tiso1->idCauLacBo = $request->doia;
        $tiso1->idTranDau = $lichthidau->id;
        $tiso1->idGiaiDau = $request->giaidau;
        $tiso1->save();

        $tiso2 = TiSo::find($tisoID[1]->id);
        $tiso2->idCauLacBo = $request->doib;
        $tiso2->idTranDau = $lichthidau->id;
        $tiso2->idGiaiDau = $request->giaidau;
        $tiso2->save();


        return redirect()->route('DanhSachLichThiDau')->with('success','Cập nhật lịch thi đấu thành công');
    }

    public function getCapNhatTiSo($id){
        $trandau = DB::SELECT("
                        SELECT
                        caulacbo.TenDayDu,
                        caulacbo.HinhAnhCauLacBo_lon,
                        tiso.idGiaiDau,
                        tiso.TiSo,
                        tiso.id,
                        trandau.VongDau,
                        trandau.NgayThiDau,
                        trandau.GioThiDau,
                        trandau.DiaDiem
                        FROM
                        caulacbo
                        INNER JOIN tiso ON tiso.idCauLacBo = caulacbo.id
                        INNER JOIN trandau ON tiso.idTranDau = trandau.id
                        WHERE trandau.id = '$id'
        ");


        return view('admin.pages.lichthidau.capnhattiso', compact('trandau'));
    }

    public function postCapNhatTiSo($idTiSoA, $idTiSoB, Request $request){
        $tisoa = TiSo::find($idTiSoA);
        $tisoa->TiSo = $request->tisoa;
        if($request->tisoa == $request->tisob){
            $tisoa->TrangThai = 0;
        }
        else if($request->tisoa > $request->tisob){
            $tisoa->TrangThai = 1;
        }
        else{
            $tisoa->TrangThai = -1;
        }
        $tisoa->save();


        $tisob = TiSo::find($idTiSoB);
        $tisob->TiSo = $request->tisob;
        if($request->tisoa == $request->tisob){
            $tisob->TrangThai = 0;
        }
        else if($request->tisoa > $request->tisob){
            $tisob->TrangThai = -1;
        }
        else{
            $tisob->TrangThai = 1;
        }
        $tisob->save();

        $bxha = BangXepHang::where('idGiaidau',$tisoa->idGiaiDau)->where('idCauLacBo', $tisoa->idCauLacBo)->first();
        $bxhb = BangXepHang::where('idGiaidau',$tisoa->idGiaiDau)->where('idCauLacBo', $tisob->idCauLacBo)->first();
        
        $bxh = BangXepHang::find($bxha->id);

        if($tisoa->TrangThai == 1){
            $bxh->SoTran +=1;
            $bxh->SoTranThang +=1;
            $bxh->BanThang += $request->tisoa;
            $bxh->BanThua += $request->tisob;
            $bxh->HieuSo += ($request->tisoa - $request->tisob );
            $bxh->Diem += 3;
        }
        else if($tisoa->TrangThai == 0){
            $bxh->SoTran += 1;
            $bxh->SoTranHoa += 1;
            $bxh->BanThang += $request->tisoa;
            $bxh->BanThua += $request->tisob;
            $bxh->Diem += 1;
        }
        else{
            $bxh->SoTran +=1;
            $bxh->SoTranThua +=1;
            $bxh->BanThang += $request->tisoa;
            $bxh->BanThua += $request->tisob;
            $bxh->HieuSo += ($request->tisoa - $request->tisob );
            $bxh->Diem += 0;
        }
        $bxh->save();

        $bxh = BangXepHang::find($bxhb->id);

        if($tisob->TrangThai == 1){
            $bxh->SoTran +=1;
            $bxh->SoTranThang +=1;
            $bxh->BanThang += $request->tisob;
            $bxh->BanThua += $request->tisoa;
            $bxh->HieuSo += ($request->tisob - $request->tisoa );
            $bxh->Diem += 3;
        }
        else if($tisob->TrangThai == 0){
            $bxh->SoTran += 1;
            $bxh->SoTranHoa += 1;
            $bxh->BanThang += $request->tisob;
            $bxh->BanThua += $request->tisoa;
            $bxh->Diem += 1;
        }
        else{
            $bxh->SoTran +=1;
            $bxh->SoTranThua +=1;
            $bxh->BanThang += $request->tisob;
            $bxh->BanThua += $request->tisoa;
            $bxh->HieuSo += ($request->tisob - $request->tisoa );
            $bxh->Diem += 0;
        }
        $bxh->save();

        return redirect()->route('DanhSachLichThiDau')->with('success','Cập nhật tỉ số thành công'); 
    }
}
