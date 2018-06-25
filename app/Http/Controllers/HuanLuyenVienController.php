<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use DB;

use App\NguoiDung;
use App\CauThu;
use App\GiaoTrinh_LuyenTap_CauThu;
use App\LichLuyenTap;
use App\GiaoTrinhTap;
use App\DoiHinh;
use App\ChienThuat;
use App\ThongTinCauThuChanThuong;

class HuanLuyenVienController extends Controller
{


	public function getHuanLuyenVien($id){
		return view('huanluyenvien.pages.trangchu');
	}




	#------------------------------------------------------------------------------------------------------------#
    #-------------------------------------------- Thông tin cá nhận ---------------------------------------------#
    #------------------------------------------------------------------------------------------------------------#

	public function getThongTinCaNhan($id){
		return view('huanluyenvien.pages.thongtincanhan');
	}
	public function getSuaThongTinCaNhan($id){
		return view('huanluyenvien.pages.suathongtincanhan');
	}




	#------------------------------------------------------------------------------------------------------------#
    #---------------------------------------------- Các danh mục ------------------------------------------------#
    #------------------------------------------------------------------------------------------------------------#

	public function getThongBao($id){
		return view('huanluyenvien.pages.thongbao');
	}

	public function getYeuCau($id){
		return view('huanluyenvien.pages.yeucau');
	}

	public function getLichThiDau($id){
		return view('huanluyenvien.pages.lichthidau');
	}

	public function getKetQua($id){
		return view('huanluyenvien.pages.ketqua');
	}




	#------------------------------------------------------------------------------------------------------------#
	#---------------------------------------------- Lịch luyện tập ----------------------------------------------#
	#------------------------------------------------------------------------------------------------------------#


	public function getLichLuyenTap($id){
		
		$CauThuTapNgayHomAy = DB::SELECT("
										SELECT cauthu.id as idCauThu, nguoidung.HoTen, lichluyentap.NgayLuyenTap, cauthu.ViTriSoTruong
										FROM nguoidung
										INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
										INNER JOIN giaotrinh_luyentap_cauthu ON giaotrinh_luyentap_cauthu.idCauThu = cauthu.id
										INNER JOIN lichluyentap ON giaotrinh_luyentap_cauthu.idLichLuyenTap = lichluyentap.id
										WHERE lichluyentap.NgayLuyenTap >= NOW()
										GROUP BY nguoidung.HoTen, lichluyentap.NgayLuyenTap, cauthu.id, cauthu.ViTriSoTruong
										ORDER BY lichluyentap.NgayLuyenTap
									");
		foreach($CauThuTapNgayHomAy as $data) {
			$cauthu = $data->idCauThu;
			$ngayluyentap = $data->NgayLuyenTap;
			$GiaoTrinhLuyenTapMoiCauThu[] = DB::SELECT("
		 										SELECT
		 										nguoidung.HoTen,
												giaotrinhtap.TenBaiTap,
												lichluyentap.NgayLuyenTap,
		 										cauthu.ViTriSoTruong,
		 										giaotrinh_luyentap_cauthu.id
	  	 										FROM nguoidung
		 										INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
		 										INNER JOIN giaotrinh_luyentap_cauthu ON giaotrinh_luyentap_cauthu.idCauThu = cauthu.id
		 										INNER JOIN lichluyentap ON giaotrinh_luyentap_cauthu.idLichLuyenTap = lichluyentap.id
		 										INNER JOIN giaotrinhtap ON giaotrinh_luyentap_cauthu.idGiaoTrinhTap = giaotrinhtap.id
		 										WHERE lichluyentap.NgayLuyenTap >= NOW() AND lichluyentap.NgayLuyenTap='$ngayluyentap' AND cauthu.id='$cauthu'
		 										ORDER BY lichluyentap.NgayLuyenTap ASC"
		 									);
		}
		$LichLuyenTap = LichLuyenTap::all();
		$NgayCauThuTap = $LichLuyenTap;
		$LichLuyenTap_DanhSach = [];
		foreach($LichLuyenTap as $lich){
			$LichLuyenTap_DanhSach[] = Calendar::event(
				$lich->DiaDiem,
				false,  
				new \Datetime($lich->NgayLuyenTap.$lich->GioLuyenTap),
				new \Datetime($lich->NgayLuyenTap),
				$lich->id
			); 
		}
		$LichLuyenTap = Calendar::addEvents($LichLuyenTap_DanhSach)
						->setOptions([ 
							'firstDay' => 1,
                            'contentHeight' => 700,
                            'themeSystem' => 'bootstrap3',
                            'columnHeader' => false,
                            'aspectRatio' => 1,
                            'allDayDefault'=> false,
						])
						->setCallbacks([ 
                            'eventClick' => 'function(event) {
                                 $("#LichTapModal"+event.id).modal("show")
                             }'
                        ]);
        foreach($NgayCauThuTap as $data) {
        	$ngay = $data->NgayLuyenTap;
        	$DanhSachCauThuTap[] = DB::SELECT("
												SELECT nguoidung.HoTen, lichluyentap.NgayLuyenTap, cauthu.ViTriSoTruong
												FROM nguoidung
												INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
												INNER JOIN giaotrinh_luyentap_cauthu ON giaotrinh_luyentap_cauthu.idCauThu = cauthu.id
												INNER JOIN lichluyentap ON giaotrinh_luyentap_cauthu.idLichLuyenTap = lichluyentap.id
												WHERE lichluyentap.NgayLuyenTap = '$ngay'
												GROUP BY nguoidung.HoTen, lichluyentap.NgayLuyenTap, cauthu.ViTriSoTruong
								        	");
        }
        		return view('huanluyenvien.pages.lichluyentap', compact( 'cauthu', 'LichLuyenTap', 'DanhSachCauThuTap', 'NgayCauThuTap', 'GiaoTrinhLuyenTapMoiCauThu', 'CauThuTapNgayHomAy'));
	}






	public function getThemLichTap($id){
		$LichTap = LichLuyenTap::orderBy('NgayLuyenTap', 'DESC')->get();
		return view('huanluyenvien.pages.lichluyentap.themlichtap', compact('LichTap'));
	}
	public function postThemLichTap($id, Request $request){
		$this->validate($request, [
			'NgayLuyenTap'     => 'required | unique:lichluyentap,NgayLuyenTap',
			'CaLuyenTap'      => 'required',
			'DiaDiem'          => 'required'
		], 
		[
			'NgayLuyenTap.required'     => 'Ngày luyện tập không được để trống',
			'NgayLuyenTap.unique'       => 'Ngày luyện tập này đã có trong cơ sỡ dữ liệu.',
			'CaLuyenTap.required'      => 'Ca luyện tập không được để trống',
			'DiaDiem.required'          => 'Địa điểm không được để trống.'               
		]);
		if( strtotime($request->NgayLuyenTap) < strtotime(date('Y-m-d'))){
			return redirect('huan-luyen-vien/1/lich-luyen-tap/them-lich-tap')->with('loi', 'Thêm lịch luyện tập không thành công. Ngày luyện tập không thể nhỏ hơn ngày hiện tại.');
		}else{
			$lichLuyenTap = new LichLuyenTap;
			$lichLuyenTap->NgayLuyenTap = $request->NgayLuyenTap;
			$lichLuyenTap->CaLuyenTap = $request->CaLuyenTap;
			$lichLuyenTap->DiaDiem = $request->DiaDiem;
			$lichLuyenTap->save();
			return redirect('huan-luyen-vien/1/lich-luyen-tap/them-lich-tap')->with('thongbao', 'Thêm lịch luyện tập thành công.');	
		}
	}

	public function getXoaLichTap($id, $idLichTap){
		$kiemTraLichCanXoa = GiaoTrinh_LuyenTap_CauThu::where('idLichLuyenTap', $idLichTap)->count();
		if($kiemTraLichCanXoa > 0){
			return redirect('huan-luyen-vien/1/lich-luyen-tap/them-lich-tap')->with('loi', 'Xóa lịch luyện tập không thành công. Lịch luyện tập đã có cầu thủ tập.');
		}
		else{
			$lichLuyenTap = LichLuyenTap::find($idLichTap);
			$lichLuyenTap->delete($idLichTap);
			return redirect('huan-luyen-vien/1/lich-luyen-tap/them-lich-tap')->with('thongbao', 'Xóa lịch luyện tập thành công.');
		}
	}

	public function getSuaLichTap($id, $idLichTap){
		$LichTap = LichLuyenTap::findOrFail($idLichTap);
		return view('huanluyenvien.pages.lichluyentap.sualichtap', compact('LichTap'));
	}
	public function postSuaLichTap($id, $idLichTap, Request $request){
		$this->validate($request, [
			'NgayLuyenTap'     => 'required | unique:lichluyentap,NgayLuyenTap,'.$idLichTap.',id',
			'CaLuyenTap'      => 'required',
			'DiaDiem'          => 'required'
		], 
		[
			'NgayLuyenTap.required'     => 'Ngày luyện tập không được để trống',
			'NgayLuyenTap.unique'       => 'Ngày luyện tập này đã có trong cơ sỡ dữ liệu.',
			'CaLuyenTap.required'      => 'Ca luyện tập không được để trống',
			'DiaDiem.required'          => 'Địa điểm không được để trống.'               
		]);
		$lichLuyenTap = LichLuyenTap::findOrFail($idLichTap);
		$lichLuyenTap->NgayLuyenTap = $request->NgayLuyenTap;
		$lichLuyenTap->CaLuyenTap = $request->CaLuyenTap;
		$lichLuyenTap->DiaDiem = $request->DiaDiem;
		$lichLuyenTap->save();
		return redirect('huan-luyen-vien/1/lich-luyen-tap/them-lich-tap')->with('thongbao', 'Cập nhật lịch luyện tập thành công.');
	}






	public function getThemCauThuTap($id){
		$NgayLuyenTap = DB::SELECT("SELECT * FROM lichluyentap WHERE lichluyentap.NgayLuyenTap > NOW() ORDER BY lichluyentap.NgayLuyenTap ASC");
		$CauThuTap = DB::SELECT("
									SELECT nguoidung.HoTen, cauthu.ViTriSoTruong, cauthu.id
									FROM nguoidung
									INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
									WHERE cauthu.id NOT IN (SELECT idCauThu FROM thongtinchanthuong_cauthu WHERE TinhTrangChanThuong='1')

								");
		$GiaoTrinhTap = GiaoTrinhTap::all();
		return view('huanluyenvien.pages.lichluyentap.themcauthutap', compact('NgayLuyenTap', 'GiaoTrinhTap', 'CauThuTap'));
	}
	public function postThemCauThuTap($id, Request $request){
		$this->validate($request, [
			'NgayLuyenTap'     => 'required',
			'CauThuTap'        => 'required',
			'GiaoTrinhTap'     => 'required'
		], 
		[
			'NgayLuyenTap.required'   => 'Ngày luyện tập không được để trống.',
			'CauThuTap.required'      => 'Bạn cần phải chọn cầu thủ.',
			'GiaoTrinhTap.required'   => 'Bạn cần phải chọn giáo trình cho cầu thủ.'               
		]);
		if($request->CauThuTap[0] === "TatCaCauThu"){
			$DanhSachCauThu = CauThu::all();
			foreach($DanhSachCauThu as $cauthu){
				foreach($request->GiaoTrinhTap as $giaotrinh){
					$giaotrinh_luyentap_cauthu = new GiaoTrinh_LuyenTap_CauThu;
					$giaotrinh_luyentap_cauthu->idLichLuyenTap = $request->NgayLuyenTap;
					$giaotrinh_luyentap_cauthu->idCauThu = $cauthu->id;
					$giaotrinh_luyentap_cauthu->idGiaoTrinhTap = $giaotrinh;
					$giaotrinh_luyentap_cauthu->save();
				}
			}
		}
		else{
			foreach($request->CauThuTap as $cauthu){
				foreach($request->GiaoTrinhTap as $giaotrinh) {
					$giaotrinh_luyentap_cauthu = new GiaoTrinh_LuyenTap_CauThu;
					$giaotrinh_luyentap_cauthu->idLichLuyenTap = $request->NgayLuyenTap;
					$giaotrinh_luyentap_cauthu->idCauThu = $cauthu;
					$giaotrinh_luyentap_cauthu->idGiaoTrinhTap = $giaotrinh;
					$giaotrinh_luyentap_cauthu->save();
				}
			}
		}
		return redirect('huan-luyen-vien/1/lich-luyen-tap/them-cau-thu-tap')->with('thongbao', 'Thêm lịch luyện tập cho cầu thủ thành công.');
	}

	public function getXoaCauThuTap($id, $idCauThu, $idNgayLuyenTap){

		$idLichLuyenTap = LichLuyenTap::select('id')->where('NgayLuyenTap', $idNgayLuyenTap)->first();
		$CacBaiTapTrongLichTapMoiCauThu = GiaoTrinh_LuyenTap_CauThu::select('id')->where('idCauThu', $idCauThu)->where('idLichLuyenTap', $idLichLuyenTap->id)->get();
		foreach($CacBaiTapTrongLichTapMoiCauThu as $idCacBaiTapTrongLichTapMoiCauThu) {
			$GiaoTrinhMuonXoa = GiaoTrinh_LuyenTap_CauThu::findOrFail($idCacBaiTapTrongLichTapMoiCauThu->id);
			$GiaoTrinhMuonXoa->delete();
		}
		return redirect('huan-luyen-vien/1/lich-luyen-tap')->with('thongbao', 'Xóa lịch luyện tập cho cầu thủ thành công.');
	}

	public function getSuaCauThuTap($id, $idCauThu, $idNgayLuyenTap){

		$idLichLuyenTap = LichLuyenTap::select('id')->where('NgayLuyenTap', $idNgayLuyenTap)->first();
		$CacBaiTapTrongLichTapMoiCauThu = GiaoTrinh_LuyenTap_CauThu::where('idCauThu', $idCauThu)->where('idLichLuyenTap', $idLichLuyenTap->id)->get();
		$NgayLuyenTap = DB::SELECT("SELECT * FROM lichluyentap WHERE lichluyentap.NgayLuyenTap > NOW() ORDER BY lichluyentap.NgayLuyenTap ASC");
		$CauThuTap = DB::SELECT("
									SELECT nguoidung.HoTen, cauthu.ViTriSoTruong, cauthu.id
									FROM nguoidung
									INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
									WHERE cauthu.id NOT IN (SELECT idCauThu FROM thongtinchanthuong_cauthu WHERE TinhTrangChanThuong='1')

								");
		$GiaoTrinhTap = GiaoTrinhTap::all();
		return view('huanluyenvien.pages.lichluyentap.suacauthutap', compact('NgayLuyenTap', 'GiaoTrinhTap', 'CauThuTap', 'CacBaiTapTrongLichTapMoiCauThu'));
	}
	public function postSuaCauThuTap($id, $idCauThu, $idNgayLuyenTap, Request $request){

		$this->validate($request, [
			'NgayLuyenTap'     => 'required',
			'CauThuTap'        => 'required',
			'GiaoTrinhTap'     => 'required'
		], 
		[
			'NgayLuyenTap.required'   => 'Ngày luyện tập không được để trống.',
			'CauThuTap.required'      => 'Bạn cần phải chọn cầu thủ.',
			'GiaoTrinhTap.required'   => 'Bạn cần phải chọn giáo trình cho cầu thủ.'               
		]);

		$CacBaiTapTrongLichTapMoiCauThu = GiaoTrinh_LuyenTap_CauThu::where('idCauThu', $idCauThu)->where('idLichLuyenTap', $idNgayLuyenTap)->get();


		$i=0;
		$SoLuongGiaoTrinhTapMoi = count($request->GiaoTrinhTap);
		$SoLuongGiaoTrinhTapCu  = count($CacBaiTapTrongLichTapMoiCauThu);

		if($SoLuongGiaoTrinhTapCu <= $SoLuongGiaoTrinhTapMoi){
			foreach($CacBaiTapTrongLichTapMoiCauThu as $cacbaitapcu){
			
				$giaotrinh_luyentap_cauthu = GiaoTrinh_LuyenTap_CauThu::find($cacbaitapcu->id);
				$giaotrinh_luyentap_cauthu->idLichLuyenTap = $request->NgayLuyenTap;
				$giaotrinh_luyentap_cauthu->idCauThu = $request->CauThuTap;
				$giaotrinh_luyentap_cauthu->idGiaoTrinhTap = $request->GiaoTrinhTap[$i];
				$giaotrinh_luyentap_cauthu->save();
				++$i;
			}
			if($i < $SoLuongGiaoTrinhTapMoi){
				for($j=$i; $j<$SoLuongGiaoTrinhTapMoi; $j++){
					$giaotrinh_luyentap_cauthu = new GiaoTrinh_LuyenTap_CauThu;
					$giaotrinh_luyentap_cauthu->idLichLuyenTap = $request->NgayLuyenTap;
					$giaotrinh_luyentap_cauthu->idCauThu = $request->CauThuTap;
					$giaotrinh_luyentap_cauthu->idGiaoTrinhTap = $request->GiaoTrinhTap[$j];
					$giaotrinh_luyentap_cauthu->save();
				}
			}
		}
		else{

			foreach($CacBaiTapTrongLichTapMoiCauThu as $idCacBaiTapTrongLichTapMoiCauThu) {
				$GiaoTrinhMuonXoa = GiaoTrinh_LuyenTap_CauThu::findOrFail($idCacBaiTapTrongLichTapMoiCauThu->id);
				$GiaoTrinhMuonXoa->delete();
			}
			foreach($request->GiaoTrinhTap as $cacbaitapmoi){
				$giaotrinh_luyentap_cauthu = new GiaoTrinh_LuyenTap_CauThu;
				$giaotrinh_luyentap_cauthu->idLichLuyenTap = $request->NgayLuyenTap;
				$giaotrinh_luyentap_cauthu->idCauThu = $request->CauThuTap;
				$giaotrinh_luyentap_cauthu->idGiaoTrinhTap = $request->GiaoTrinhTap[$i];
				$giaotrinh_luyentap_cauthu->save();
				++$i;
			}
		}

		return redirect('huan-luyen-vien/1/lich-luyen-tap')->with('thongbao', 'Cập nhật lịch luyện tập cho cầu thủ thành công.');
	}





	#-------------------------------------------------------------------------------------------------------------#
    #---------------------------------------------- Giáo trình tập -----------------------------------------------#
    #-------------------------------------------------------------------------------------------------------------#

	public function getGiaoTrinhTap($id){
		$GiaoTrinhTap = GiaoTrinhTap::orderBy('id', 'DESC')->get();
		return view('huanluyenvien.pages.giaotrinhtap', compact('GiaoTrinhTap'));
	}

	public function getThemGiaoTrinhTap($id){
		return view('huanluyenvien.pages.giaotrinhtap.them');
	}
	public function postThemGiaoTrinhTap(Request $request){
		$this->validate($request, [
			'TenBaiTap'              => 'required | unique:giaotrinhtap,TenBaiTap',
			'ThoiLuongLuyenTapToiDa' => 'required | numeric',
			'NoiDungBaiTap'          => 'required'
		], 
		[
			'TenBaiTap.required'     => 'Tên bài tập không được để trống',
			'TenBaiTap.unique'       => 'Tên bài tập này đã có trong cơ sỡ dữ liệu.',
			'ThoiLuongLuyenTapToiDa.required'     => 'Thời lượng tập không được để trống',
			'ThoiLuongLuyenTapToiDa.numeric'      => 'Thời lượng tập bắt buộc là số và không có kí tự đặc biệt.',
			'NoiDungBaiTap.required' => 'Nội dung bài tập không được để trống',
		]);
		$giaotrinh = new GiaoTrinhTap;
		$giaotrinh->TenBaiTap = $request->TenBaiTap;
		$giaotrinh->ThoiLuongTapToiDa = $request->ThoiLuongLuyenTapToiDa;
		$giaotrinh->NoiDungBaiTap = $request->NoiDungBaiTap;
		$giaotrinh->save();
		return redirect('huan-luyen-vien/1/giao-trinh-tap')->with('thongbao', 'Thêm giáo trình tập thành công.');
	}

	public function getXoaGiaoTrinhTap($id, $idGiaoTrinh){
		$kiemtraGiaoTrinhCanXoa = GiaoTrinh_LuyenTap_CauThu::where('idGiaoTrinhTap', $idGiaoTrinh)->count();
		if($kiemtraGiaoTrinhCanXoa > 0){
			return redirect('huan-luyen-vien/1/giao-trinh-tap')->with('loi', 'Xóa giáo trình tập không thành công. Giáo trình đã có cầu thủ tập.');
		}
		else{
			$giaotrinh = GiaoTrinhTap::find($idGiaoTrinh);
			$giaotrinh->delete($idGiaoTrinh);
			return redirect('huan-luyen-vien/1/giao-trinh-tap')->with('thongbao', 'Xóa giáo trình tập thành công.');
		}
	}

	public function getSuaGiaoTrinhTap($id, $idGiaoTrinh){
		$GiaoTrinh = GiaoTrinhTap::findOrFail($idGiaoTrinh);
		return view('huanluyenvien.pages.giaotrinhtap.sua', compact('GiaoTrinh'));
	}
	public function postSuaGiaoTrinhTap($id, $idGiaoTrinh, Request $request){
		$this->validate($request, [
			'TenBaiTap'     => 'required | unique:giaotrinhtap,TenBaiTap,'.$idGiaoTrinh.',id',
			'ThoiLuongLuyenTapToiDa' => 'required | numeric',
			'NoiDungBaiTap' => 'required'
		], 
		[
			'TenBaiTap.required'     => 'Tên bài tập không được để trống',
			'TenBaiTap.unique'       => 'Tên bài tập này đã có trong cơ sỡ dữ liệu.',
			'ThoiLuongLuyenTapToiDa.required'     => 'Thời lượng tập không được để trống',
			'ThoiLuongLuyenTapToiDa.numeric'      => 'Thời lượng tập bắt buộc là số và không có kí tự đặc biệt.',
			'NoiDungBaiTap.required' => 'Nội dung bài tập không được để trống',
		]);
		$giaotrinh = GiaoTrinhTap::find($idGiaoTrinh);
		$giaotrinh->TenBaiTap = $request->TenBaiTap;
		$giaotrinh->ThoiLuongTapToiDa = $request->ThoiLuongLuyenTapToiDa;
		$giaotrinh->NoiDungBaiTap = $request->NoiDungBaiTap;
		$giaotrinh->save();
		return redirect('huan-luyen-vien/1/giao-trinh-tap')->with('thongbao', 'Cập nhật giáo trình tập thành công.');
	}



    #-------------------------------------------------------------------------------------------------------------#
    #--------------------------------------------- Đội hình chiến thuật ------------------------------------------#
    #-------------------------------------------------------------------------------------------------------------#



	public function getDoiHinhChienThuat($id){

		$DanhSachCacTranDau = DB::SELECT("
											SELECT
											trandau.id,
											trandau.VongDau,
											trandau.NgayThiDau,
											tiso.TiSo,
											caulacbo.TenDayDu,
											caulacbo.HinhAnhCauLacBo,
											doihinh.TenDoiHinh,
											chienthuat.TenChienThuat
											FROM trandau
											INNER JOIN doihinh ON trandau.idDoiHinh = doihinh.id
											INNER JOIN chienthuat ON trandau.idChienThuat = chienthuat.id
											INNER JOIN tiso ON tiso.idTranDau = trandau.id
											INNER JOIN caulacbo ON tiso.idCauLacBo = caulacbo.id
											ORDER BY trandau.NgayThiDau DESC
										");

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
                                            FROM caulacbo
                                            INNER JOIN tiso ON tiso.idCauLacBo = caulacbo.id
                                            INNER JOIN trandau ON tiso.idTranDau = trandau.id
                                            WHERE tiso.TiSo IS NULL
                                            ORDER BY trandau.NgayThiDau ASC
                                            LIMIT 2
                                        ");
		return view('huanluyenvien.pages.doihinhchienthuat', compact('DanhSachCacTranDau', 'TranDauTiepTheo'));
	}






	public function getDoiHinh($id){
		$DanhSachDoiHinh = DoiHinh::all();
		return view('huanluyenvien.pages.doihinh', compact('DanhSachDoiHinh'));
	}

	public function getThemDoiHinh($id){
		return view('huanluyenvien.pages.doihinh.them');
	}
	public function postThemDoiHinh($id, Request $request){
		$this->validate($request, [
			'TenDoiHinh'      => 'required  | unique:doihinh,TenDoiHinh',
			'HinhAnhDoiHinh'  => 'image',
		], 
		[
			'TenDoiHinh.required'          => 'Bạn cần nhập tên đội hình.',
			'TenDoiHinh.unique'            => 'Tên đội hình này đã có trong database.',
			'HinhAnhDoiHinh.image'         => 'Hình ảnh sai định dạng ( chỉ nhận ảnh đuôi *.png, *.jpeg, *.jpg).',       
		]);

		$doihinh = new DoiHinh;
		$doihinh->TenDoiHinh = $request->TenDoiHinh;
		$doihinh->SoTranThang = 0;
		$doihinh->SoTranHoa = 0;
		$doihinh->SoTranThua = 0;
		if($request->hasFile('HinhAnhDoiHinh')){
    		$image = $request->file('HinhAnhDoiHinh');
    		$duoi = $image->getClientOriginalExtension();
	        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
	        	return redirect('huan-luyen-vien/1/doi-hinh/them')->with('loi',' Hình ảnh sai định dạng ( chỉ nhận ảnh đuôi *.png, *.jpeg, *.jpg).');
	        }
    		$image->move('Client/images/formations/', time().$image->getClientOriginalName());
    		$doihinh->HinhAnhDoiHinh = time().$image->getClientOriginalName();
    	}
    	else{
    		$doihinh->HinhAnhDoiHinh = 'unknown.png';
    	}
		$doihinh->save();
		
		return redirect('huan-luyen-vien/1/doi-hinh')->with('thongbao', 'Thêm đội hình thành công.');
	}

	public function getXoaDoiHinh($id, $idDoiHinh){
		$chienthuat = DoiHinh::findOrFail($idDoiHinh);
		$chienthuat->delete();
		return redirect('huan-luyen-vien/1/doi-hinh')->with('thongbao', 'Xóa đội hình thành công.');
	}

	public function getSuaDoiHinh($id, $idDoiHinh){
		$doihinh = DoiHinh::findOrFail($idDoiHinh);
		return view('huanluyenvien.pages.doihinh.sua', compact('doihinh'));
	}
	public function postSuaDoiHinh($id, $idDoiHinh, Request $request){
		$this->validate($request, [
			'TenDoiHinh'      => 'required  | unique:doihinh,TenDoiHinh,'.$idDoiHinh.',id',
			'HinhAnhDoiHinh'  => 'image',
		], 
		[
			'TenDoiHinh.required'          => 'Bạn cần nhập tên đội hình.',
			'TenDoiHinh.unique'            => 'Tên đội hình này đã có trong database.',
			'HinhAnhDoiHinh.image'         => 'Hình ảnh sai định dạng ( chỉ nhận ảnh đuôi *.png, *.jpeg, *.jpg).',       
		]);

		$doihinh = DoiHinh::findOrFail($idDoiHinh);
		$doihinh->TenDoiHinh = $request->TenDoiHinh;
		$doihinh->SoTranThang = 0;
		$doihinh->SoTranHoa = 0;
		$doihinh->SoTranThua = 0;
		if($request->hasFile('HinhAnhDoiHinh')){
    		$image = $request->file('HinhAnhDoiHinh');
    		$duoi = $image->getClientOriginalExtension();
	        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
	        	return redirect('huan-luyen-vien/1/doi-hinh/them')->with('loi',' Hình ảnh sai định dạng ( chỉ nhận ảnh đuôi *.png, *.jpeg, *.jpg).');
	        }
    		$image->move('Client/images/formations/', time().$image->getClientOriginalName());
    		$doihinh->HinhAnhDoiHinh = time().$image->getClientOriginalName();
    	}
		$doihinh->save();
		
		return redirect('huan-luyen-vien/1/doi-hinh')->with('thongbao', 'Cập nhật đội hình thành công.');
	}






	public function getChienThuat($id){
		$DanhSachChienThuat = ChienThuat::all();
		return view('huanluyenvien.pages.chienthuat', compact('DanhSachChienThuat'));
	}

	public function getThemChienThuat($id){
		return view('huanluyenvien.pages.chienthuat.them');
	}
	public function postThemChienThuat($id, Request $request){
		$this->validate($request, [
			'TenChienThuat'      => 'required  | unique:chienthuat,TenChienThuat',
			'NoiDungChienThuat'  => 'required',
		], 
		[
			'TenChienThuat.required'          => 'Bạn cần nhập tên chiến thuật.',
			'TenChienThuat.unique'            => 'Tên chiến thuật này đã có trong database.',
			'NoiDungChienThuat.required'      => 'Bạn cần phải nội dung chiến thuật.',       
		]);

		$chienthuat = new ChienThuat;
		$chienthuat->TenChienThuat = $request->TenChienThuat;
		$chienthuat->NoiDungChienThuat = $request->NoiDungChienThuat;
		$chienthuat->save();
		
		return redirect('huan-luyen-vien/1/chien-thuat')->with('thongbao', 'Thêm chiến thuật thành công.');
	}

	public function getXoaChienThuat($id, $idChienThuat){
		$chienthuat = ChienThuat::findOrFail($idChienThuat);
		$chienthuat->delete();
		return redirect('huan-luyen-vien/1/chien-thuat')->with('thongbao', 'Xóa chiến thuật thành công.');
	}

	public function getSuaChienThuat($id, $idChienThuat){
		$chienthuat = ChienThuat::findOrFail($idChienThuat);
		return view('huanluyenvien.pages.chienthuat.sua', compact('chienthuat'));
	}
	public function postSuaChienThuat($id, $idChienThuat, Request $request){
		$this->validate($request, [
			'TenChienThuat'      => 'required  | unique:chienthuat,TenChienThuat,'. $idChienThuat . ',id',
			'NoiDungChienThuat'  => 'required',
		], 
		[
			'TenChienThuat.required'          => 'Bạn cần nhập tên chiến thuật.',
			'TenChienThuat.unique'            => 'Tên chiến thuật này đã có trong database.',
			'NoiDungChienThuat.required'      => 'Bạn cần phải nội dung chiến thuật.',       
		]);

		$chienthuat = ChienThuat::findOrFail($idChienThuat);
		$chienthuat->TenChienThuat = $request->TenChienThuat;
		$chienthuat->NoiDungChienThuat = $request->NoiDungChienThuat;
		$chienthuat->save();
		
		return redirect('huan-luyen-vien/1/chien-thuat')->with('thongbao', 'Cập nhật chiến thuật thành công.');
	}






	#--------------------------------------------------------------------------------------------------------------#
    #---------------------------------------------- Sức khỏe cầu thủ ----------------------------------------------#
    #--------------------------------------------------------------------------------------------------------------#

	public function getSucKhoeCauThu($id){
		return view('huanluyenvien.pages.suckhoecauthu');
	}
}
