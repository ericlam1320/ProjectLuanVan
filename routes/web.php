<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin'],function(){

		Route::get('index', 'AdminController@getIndex')->name('TrangChu');

        Route::group(['prefix'=>'bangxephang'],function(){
    	
	    	Route::get('danhsach', 'BangXepHangController@getDanhSach')->name('DanhSachBangXepHang');

	    	Route::get('them', 'BangXepHangController@getThem')->name('ThemBangXepHang');
	    	// Route::post('them', 'BangXepHangController@postThem');

	    	Route::get('sua', 'BangXepHangController@getSua')->name('SuaBangXepHang');
	    	// Route::post('sua/{id}', 'BangXepHangController@postSua');
	    });

        Route::group(['prefix'=>'lichthidau'], function(){

            Route::get('danhsach', 'LichThiDauController@getDanhSach')->name('DanhSachLichThiDau');

            Route::get('them', 'LichThiDauController@getThem')->name('ThemLichThiDau');
            // Route::post('them', 'LichThiDauController@postThem');

            Route::get('sua', 'LichThiDauController@getSua')->name('SuaLichThiDau');
            // Route::post('sua/{id}', 'LichThiDauController@postSua');
        });
        
        Route::group(['prefix'=>'nguoidung'], function(){

            Route::get('danhsach', 'NguoiDungController@getDanhSach')->name('DanhSachNguoiDung');

            Route::get('them', 'NguoiDungController@getThem')->name('ThemNguoiDung');
            // Route::post('them', 'NguoiDungController@postThem');

            Route::get('sua', 'NguoiDungController@getSua')->name('SuaNguoiDung');
            // Route::post('sua/{id}', 'NguoiDungController@postSua');
        });

        Route::group(['prefix'=>'tintuc'], function(){

            Route::get('danhsach', 'TinTucController@getDanhSach')->name('DanhSachTinTuc');

            Route::get('them', 'TinTucController@getThem')->name('ThemTinTuc');
            // Route::post('them', 'NguoiDungController@postThem');

            Route::get('sua', 'TinTucController@getSua')->name('SuaTinTuc');
            // Route::post('sua/{id}', 'NguoiDungController@postSua');
        });
        
    });

// Route::group(['prefix'=>'nhanvienyte'],function(){
        
//      Route::get('index', 'AdminController@getIndex' );
        
        // Route::get('bangxephang', 'AdminController@getBangXepHang');

        // Route::get('lichthidau', 'AdminController@getLichThiDau');
        
        // Route::get('nguoidung', 'AdminController@getNguoiDung');

        // Route::get('tintuc', 'AdminController@getTinTuc');
//     });