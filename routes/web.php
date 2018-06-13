<?php

#----------------------------- Client Page -------------------------------------
Route::get('dang-nhap'                    , 'LoginController@getDangNhap');
Route::post('dang-nhap'                   , 'LoginController@postDangNhap');

Route::get(''                             , 'HomeController@getIndex')->name('Home');
Route::get('lich-su'                      , 'HomeController@getLichSu');
Route::get('lich-thi-dau'                 , 'HomeController@getLichThiDau');
Route::get('ket-qua'                      , 'HomeController@getKetQua');
Route::get('bang-xep-hang'                , 'HomeController@getBangXepHang');
Route::get('danh-sach-cau-thu'            , 'HomeController@getCauThu');
Route::get('danh-sach-cau-thu/chi-tiet'   , 'HomeController@getChiTietCauThu');
Route::get('thong-ke-doi-bong'            , 'HomeController@getThongKeDoiBong');
Route::get('lien-he'                      , 'HomeController@getLienHe');
Route::get('tin-tuc'                      , 'HomeController@getTinTuc');
Route::get('tin-tuc/chi-tiet'             , 'HomeController@getChiTietTinTuc');



#-------------------------- Cau Thu Page -----------------------------------
Route::group(['prefix'                    =>'cau-thu'], function(){
	Route::group(['prefix'                =>'{TenCauThu}'], function(){
		Route::get(''                     , 'CauThuController@getCauThu');
		Route::get('thong-tin-ca-nhan'    , 'CauThuController@getThongTinCaNhan');
		Route::get('thong-tin-ca-nhan/sua', 'CauThuController@getSuaThongTinCaNhan');
		Route::get('lich-luyen-tap'       , 'CauThuController@getLichLuyenTap');
		Route::get('doi-hinh-chien-thuat' , 'CauThuController@getDoiHinhChienThuat');
		Route::get('suc-khoe'             , 'CauThuController@getSucKhoe');
		Route::get('thong-bao'            , 'CauThuController@getThongBao');
		Route::get('yeu-cau'              , 'CauThuController@getYeuCau');
		Route::get('lich-thi-dau'         , 'CauThuController@getLichThiDau');
		Route::get('ket-qua'              , 'CauThuController@getKetQua');
	});
});



#-------------------------- Huan Luyen Vien Page -----------------------------------
Route::group(['prefix'                    =>'huan-luyen-vien'], function(){
	Route::group(['prefix'                =>'{id}'], function(){
		Route::get(''                     , 'HuanLuyenVienController@getHuanLuyenVien');
		Route::get('thong-tin-ca-nhan'    , 'HuanLuyenVienController@getThongTinCaNhan');
		Route::get('thong-tin-ca-nhan/sua', 'HuanLuyenVienController@getSuaThongTinCaNhan');
		Route::get('lich-luyen-tap'       , 'HuanLuyenVienController@getLichLuyenTap');
		Route::get('doi-hinh-chien-thuat' , 'HuanLuyenVienController@getDoiHinhChienThuat');
		Route::get('suc-khoe-cau-thu'     , 'HuanLuyenVienController@getSucKhoe');
		Route::get('thong-bao'            , 'HuanLuyenVienController@getThongBao');
		Route::get('yeu-cau'              , 'HuanLuyenVienController@getYeuCau');
		Route::get('lich-thi-dau'         , 'HuanLuyenVienController@getLichThiDau');
		Route::get('ket-qua'              , 'HuanLuyenVienController@getKetQua');
	});
});



#----------------------------- Admin Page ---------------------------------
Route::group(['prefix'=>'admin'],function(){
	Route::get('', 'AdminController@getIndex')->name('TrangChu_Admin');

	Route::group(['prefix'=>'bang-xep-hang'],function(){
		Route::get('danh-sach'		, 	'BangXepHangController@getDanhSach')	->name('DanhSachBangXepHang');
		Route::get('them'			, 	'BangXepHangController@getThem')		->name('ThemBangXepHang');
	 // Route::post('them'			, 	'BangXepHangController@postThem');
		Route::get('sua'			, 	'BangXepHangController@getSua')			->name('SuaBangXepHang');
	 // Route::post('sua/{id}'		, 	'BangXepHangController@postSua');
	});

	Route::group(['prefix'=>'giai-dau'],function(){
		Route::get('danh-sach'		, 	'GiaiDauController@getDanhSach')	->name('DanhSachGiaiDau');
		Route::get('them'			, 	'GiaiDauController@getThem')		->name('ThemGiaiDau');
	 	Route::post('them'			, 	'GiaiDauController@postThem');
	 	Route::get('xoa/{id}'		,	'GiaiDauController@getXoa');
		Route::get('sua/{id}'			, 	'GiaiDauController@getSua')			->name('SuaGiaiDau');
	 	Route::post('sua/{id}'		, 	'GiaiDauController@postSua');
	});

	Route::group(['prefix'=>'lich-thi-dau'], function(){
		Route::get('danh-sach'		, 	'LichThiDauController@getDanhSach')		->name('DanhSachLichThiDau');
		Route::get('them'			, 	'LichThiDauController@getThem')			->name('ThemLichThiDau');
     // Route::post('them'			, 	'LichThiDauController@postThem');
		Route::get('sua'			, 	'LichThiDauController@getSua')			->name('SuaLichThiDau');
     // Route::post('sua/{id}'		, 	'LichThiDauController@postSua');
	});

	Route::group(['prefix'=>'nguoi-dung'], function(){
		Route::get('danh-sach'		, 	'NguoiDungController@getDanhSach')		->name('DanhSachNguoiDung');
		Route::get('them'			, 	'NguoiDungController@getThem')			->name('ThemNguoiDung');
     // Route::post('them'			, 	'NguoiDungController@postThem');
		Route::get('sua'			, 	'NguoiDungController@getSua')			->name('SuaNguoiDung');
     // Route::post('sua/{id}'		, 	'NguoiDungController@postSua');
	});

	Route::group(['prefix'=>'tin-tuc'], function(){
		Route::get('danh-sach'		, 	'TinTucController@getDanhSach')			->name('DanhSachTinTuc');
		Route::get('them'			, 	'TinTucController@getThem')				->name('ThemTinTuc');
     // Route::post('them'			, 	'TinTucController@postThem');
		Route::get('sua'			, 	'TinTucController@getSua')				->name('SuaTinTuc');
     // Route::post('sua/{id}'		, 	'TinTucController@postSua');
	});
});



#--------------------------- Nhân viên y tế Page -----------------------------------
Route::group(['prefix'=>'nhan-vien-y-te'],function(){

	Route::get('', 'NhanVienYTeController@getIndex' )->name('TrangChu_NhanVienYTe');

	Route::group(['prefix'=>'chanthuong'], function(){
		Route::get('danh-sach'		, 	'ChanThuongController@getDanhSach')		->name('DanhSachChanThuong');
		Route::get('them'			, 	'ChanThuongController@getThem')			->name('ThemChanThuong');
     // Route::post('them'			, 	'ChanThuongController@postThem');
		Route::get('sua'			, 	'ChanThuongController@getSua')			->name('SuaChanThuong');
    //  Route::post('sua/{id}'		, 	'ChanThuongController@postSua');
	});

	Route::group(['prefix'=>'lich-kham'], function(){
		Route::get('danh-sach'		, 	'LichKhamController@getDanhSach')		->name('DanhSachLichKham');
		Route::get('them'			, 	'LichKhamController@getThem')			->name('ThemLichKham');
     // Route::post('them'			, 	'LichKhamController@postThem');
		Route::get('sua'			, 	'LichKhamController@getSua')			->name('SuaLichKham');
     // Route::post('sua/{id}'		, 	'LichKhamController@postSua');
	});

	Route::group(['prefix'=>'toa-huoc'], function(){
		Route::get('danh-sach'		, 	'ToaThuocController@getDanhSach')		->name('DanhSachToaThuoc');
		Route::get('them'			, 	'ToaThuocController@getThem')				->name('ThemToaThuoc');
     // Route::post('them'			, 	'ToaThuocController@postThem');
		Route::get('sua'			, 	'ToaThuocController@getSua')			->name('SuaToaThuoc');
     // Route::post('sua/{id}'		, 	'ToaThuocController@postSua');
	});

	Route::get('nguoidung', 'AdminController@getNguoiDung');
});