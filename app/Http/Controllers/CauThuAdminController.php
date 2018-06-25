<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CauThu;
use App\NguoiDung;

class CauThuAdminController extends Controller
{
    public function getDanhSach(){
    	$cauthu = CauThu::with('NguoiDung')->get();
    	return view('admin.pages.cauthu.danhsach', compact('cauthu'));
    }

    public function getThem(){
    	return view('admin.pages.cauthu.them');
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'hoten' 			=> 		'required',
    		'tendangnhap'		=>		'required|unique:nguoidung,username',
    		'matkhau' 			=>		'required|min:6',
    		'nhaplaimatkhau'	=>		'required|same:matkhau', 
    		'email'				=>		'required|email|unique:nguoidung,Email',
    		'quoctich'			=> 		'required',
    		'noisinh'			=>		'required',
    		'hinhdaidien'       =>      'image|mimes:jpeg,jpg,png,gif,svg|max:10000',
    		'soao'				=>		'unique:cauthu,SoAo',
    		'luocsucauthu'		=>		'required|unique:cauthu,LuocSuCauThu'

    	],
    	[
    		'hoten.required'				=>		'Không được để trống',
    		'tendangnhap.required'			=>		'Không được để trống',
    		'tendangnhap.unique'			=>		'Tên đăng nhập đã tồn tại',
    		'matkhau.required'				=>		'Không được để trống ',
    		'matkhau.min'					=>		'Mật khẩu tối thiểu 6 ký tự',
    		'nhaplaimatkhau.required'		=>		'Không được để trống',
    		'nhaplaimatkhau.same'			=>		'Mật khẩu nhập lại không trùng khớp',
    		'email.required'				=>		'Không được để trống ',
    		'email.email'					=>		'Email không hợp lệ',
    		'email.unique'					=>		'Email đã tồn tại',
    		'quoctich.required'				=>		'Không được để trống',
    		'noisinh.required'				=>		'Không được để trống',
    		'hinhdaidien.image'             =>      'Hình đại diện không đúng định dạng',
            'hinhdaidien.mimes'             =>      'Hình ảnh phải có định dạng : jpeg,jpg,png,gif,svg',
            'hinhdaidien.max'               =>      'Kích thước hình ảnh quá lớn',

            'soao.unique'					=>		'Số áo đã tồn tại',
    		'luocsucauthu.required'			=>		'Không được để trống'
    	]);

    	$nguoidung = new NguoiDung;

    	$nguoidung->HoTen 			= 		$request->hoten;
    	$nguoidung->ChucVu	 		= 		'cauthu';
    	$nguoidung->username 		= 		$request->tendangnhap;
    	$nguoidung->password 		=		$request->matkhau;
    	$nguoidung->Email 			= 		$request->email;
    	$nguoidung->NgaySinh 		= 		$request->ngaysinh;
    	$nguoidung->QuocTich 		= 		$request->quoctich;
    	$nguoidung->GioiTinh 		= 		'1';
    	$nguoidung->NoiSinh 		= 		$request->noisinh;
    	$nguoidung->HinhDaiDien 	= 		$request->hinhdaidien;

    	if($request->hasFile('hinhdaidien')){
    		$img = $request->file('hinhdaidien');
    		$img->move('Client/images/players/', time().$img->getClientOriginalName());
    		$nguoidung->HinhDaiDien =  time().$img->getClientOriginalName();
    	}
    	else{
    		$nguoidung->HinhDaiDien = 'noone.png';
    	}

    	$nguoidung->save();
    	


    	$cauthu = new CauThu;

    	$cauthu->ChieuCao 			=		$request->chieucao;
    	$cauthu->CanNang			=		$request->cannang;
    	$cauthu->ViTriSoTruong		=		$request->vitrisotruong;
    	$cauthu->SoAo				=		$request->soao;
    	$cauthu->ChanThuan			=		$request->chanthuan;
    	$cauthu->LuocSuCauThu		=		$request->luocsucauthu;
    	$cauthu->idNguoiDung		=		$nguoidung->id;

    	$cauthu->save();


    	return redirect()->route('DanhSachCauThu')->with('success','Thêm cầu thủ thành công');

    }

    public function getXoa($id){
    	$cauthu = CauThu::with('NguoiDung')->find($id);
    	$cauthu->delete();
    	$cauthu->NguoiDung->delete();
    	return redirect()->route('DanhSachCauThu')->with('success','Xoá cầu thủ thành công');
    }

    public function getSua($id){
    	$cauthu = CauThu::with('NguoiDung')->find($id);
    	return view('admin.pages.cauthu.sua', compact('cauthu'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request, [
    		'hoten' 			=> 		'required',
    		'tendangnhap'		=>		'required',
    		'email'				=>		'required|email',
    		'quoctich'			=> 		'required',
    		'noisinh'			=>		'required',
    		'hinhdaidien'       =>      'image|mimes:jpeg,jpg,png,gif,svg|max:10000',
    		
    		'luocsucauthu'		=>		'required'

    	],
    	[
    		'hoten.required'				=>		'Không được để trống',
    		'tendangnhap.required'			=>		'Không được để trống',
    		'email.required'				=>		'Không được để trống ',
    		'email.email'					=>		'Email không hợp lệ',
    		'quoctich.required'				=>		'Không được để trống',
    		'noisinh.required'				=>		'Không được để trống',
    		'hinhdaidien.image'             =>      'Hình đại diện không đúng định dạng',
            'hinhdaidien.mimes'             =>      'Hình ảnh phải có định dạng : jpeg,jpg,png,gif,svg',
            'hinhdaidien.max'               =>      'Kích thước hình ảnh quá lớn',

    		'luocsucauthu.required'			=>		'Không được để trống'
    	]);

    	$cauthuID = CauThu::find($id);
    	
    	$nguoidungID = NguoiDung::where('id', $cauthuID->idNguoiDung)->first();

    	$nguoidung = NguoiDung::find($nguoidungID->id);
    	
    	$nguoidung->HoTen 			= 		$request->hoten;
    	$nguoidung->ChucVu	 		= 		'cauthu';
    	$nguoidung->username 		= 		$request->tendangnhap;
    	$nguoidung->Email 			= 		$request->email;
    	$nguoidung->NgaySinh 		= 		$request->ngaysinh;
    	$nguoidung->QuocTich 		= 		$request->quoctich;
    	$nguoidung->GioiTinh 		= 		'1';
    	$nguoidung->NoiSinh 		= 		$request->noisinh;
    	$nguoidung->HinhDaiDien 	= 		$request->hinhdaidien;

    	if($request->hasFile('hinhdaidien')){
    		$img = $request->file('hinhdaidien');
    		$img->move('Client/images/players/', time().$img->getClientOriginalName());
    		$nguoidung->HinhDaiDien =  time().$img->getClientOriginalName();
    	}

    	$nguoidung->save();
    	


    	$cauthu = CauThu::find($id);

    	$cauthu->ChieuCao 			=		$request->chieucao;
    	$cauthu->CanNang			=		$request->cannang;
    	$cauthu->ViTriSoTruong		=		$request->vitrisotruong;
    	$cauthu->SoAo				=		$request->soao;
    	$cauthu->ChanThuan			=		$request->chanthuan;
    	$cauthu->LuocSuCauThu		=		$request->luocsucauthu;
    	$cauthu->idNguoiDung		=		$nguoidung->id;

    	$cauthu->save();

    	return redirect()->route('DanhSachCauThu')->with('success','Cập nhật cầu thủ thành công');
    }
}
