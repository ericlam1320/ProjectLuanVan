<?php

namespace App\Http\Controllers;

use Request;
use App\DoiHinh;
use App\ChienThuat;
use App\VaiTro;
use App\ViTri;
use App\ViTriDoiHinh;
use DB;

class AjaxController extends Controller
{
    public function getAjaxSapXepDoiHinhChienThuat($id, $idDoiHinh, $idTranDau, Request $request){

    	$ViTriDoiHinh = DB::SELECT("
										SELECT vitri.*
										FROM doihinh
										INNER JOIN vitri_doihinh ON vitri_doihinh.idDoiHinh = doihinh.id
										INNER JOIN vitri ON vitri_doihinh.idViTri = vitri.id
										WHERE doihinh.id='$idDoiHinh'
									");

    	$CauThuDuocRaSan = DB::SELECT("
										SELECT nguoidung.HoTen, cauthu.*
										FROM nguoidung
										INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
										WHERE cauthu.id NOT IN (SELECT idCauThu FROM thongtinchanthuong_cauthu WHERE TinhTrangChanThuong='1')

									");

		$html = ''; 
		$data = '';
		
        if($request::ajax()){

            $doihinhAJAX = DoiHinh::where('id', $idDoiHinh)->first();

            $html .= '
				<div class="col-md-12" id="formSapXepDoiHinhChienThuat">
					<div class="ftb_tabs_drop">
						<h5>Đội hình ra sân</h5>
					</div>
					<table class="formation">
							<tbody class="text-center">';

								for($dong=0; $dong<8; $dong++){

								$html .= '<tr>';
									for ($cot=0; $cot<5; $cot++){
										
										$html .= '<td>';
											for($i=0; $i<11; $i++){
											if($dong===$ViTriDoiHinh[$i]->ChiSoDong && $cot===$ViTriDoiHinh[$i]->ChiSoCot){

												$html .= '<select name="CauThu[]"  class="form-control">
													<option value="ChonCauThu">Chọn cầu thủ</option>';
													foreach($CauThuDuocRaSan as $cauthu){

													$html .= '<option value="'. $cauthu->id .'">'. $cauthu->HoTen . ' - ' . $cauthu->ViTriSoTruong .'</option>';
													}
												$html .= '</select>'.
												$ViTriDoiHinh[$i]->TenViTri;
											}
											}
										$html .= '</td>';

									
									}
								$html .= '</tr>';
								}

							$html .= '</tbody>
					</table>
				</div>
            ';
    
        }
        $data = array( 
        	'DoiHinh' => "$html", 
        );
        die(json_encode($data));

    }

    public function getAjaxSuaDoiHinhChienThuat($id, $idDoiHinh, $idTranDau, Request $request){

    	$CauThu = DB::SELECT("
								SELECT
								vitri_cauthu_trandau.idCauThu,
								vitri_cauthu_trandau.idViTri,
								vitri_cauthu_trandau.idTranDau
								FROM trandau
								INNER JOIN vitri_cauthu_trandau ON vitri_cauthu_trandau.idTranDau = trandau.id
								WHERE trandau.id='$idTranDau'
							");

    	$ViTriDoiHinh = DB::SELECT("
										SELECT vitri.*
										FROM doihinh
										INNER JOIN vitri_doihinh ON vitri_doihinh.idDoiHinh = doihinh.id
										INNER JOIN vitri ON vitri_doihinh.idViTri = vitri.id
										WHERE doihinh.id='$idDoiHinh'
									");

    	$CauThuDuocRaSan = DB::SELECT("
										SELECT nguoidung.HoTen, cauthu.*
										FROM nguoidung
										INNER JOIN cauthu ON cauthu.idNguoiDung = nguoidung.id
										WHERE cauthu.id NOT IN (SELECT idCauThu FROM thongtinchanthuong_cauthu WHERE TinhTrangChanThuong='1')

									");

		$html = ''; 
		$data = '';
		
        if($request::ajax()){

            $doihinhAJAX = DoiHinh::where('id', $idDoiHinh)->first();

            $html .= '
				<div class="col-md-12" id="formSapXepDoiHinhChienThuat">
					<div class="ftb_tabs_drop">
						<h5>Đội hình ra sân</h5>
					</div>
					<table class="formation">
							<tbody class="text-center">';

								for($dong=0; $dong<8; $dong++){

								$html .= '<tr>';
									for ($cot=0; $cot<5; $cot++){
										
										$html .= '<td>';
											for($i=0; $i<11; $i++){
											if($dong===$ViTriDoiHinh[$i]->ChiSoDong && $cot===$ViTriDoiHinh[$i]->ChiSoCot){

												$html .= '<select name="CauThu[]"  class="form-control">
													<option value="ChonCauThu">Chọn cầu thủ</option>';
													foreach($CauThuDuocRaSan as $cauthu){

													$html .= '<option value="'. $cauthu->id .'"'. ($CauThu[$i]->idCauThu===$cauthu->id ? "selected" : "") .'  >'. $cauthu->HoTen . ' - ' . $cauthu->ViTriSoTruong .'</option>';
													}
												$html .= '</select>'.
												$ViTriDoiHinh[$i]->TenViTri;
											}
											}
										$html .= '</td>';

									
									}
								$html .= '</tr>';
								}

							$html .= '</tbody>
					</table>
				</div>
            ';
    
        }
        $data = array( 
        	'DoiHinh' => "$html", 
        );
        die(json_encode($data));

    }
}


