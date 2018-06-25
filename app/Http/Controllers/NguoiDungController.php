<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\NguoiDung;
use App\CauThu;

class NguoiDungController extends Controller
{
    public function getDanhSach(){
    	$nguoidung = NguoiDung::all();
    	return view('admin.pages.nguoidung.danhsach', compact('nguoidung'));
    }

    public function getThem(){
    	return view('admin.pages.nguoidung.them');
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'hoten' 			=> 		'required',
    		'tendangnhap'		=>		'required|unique:nguoidung,username',
    		'matkhau' 			=>		'required|min:5',
    		'nhaplaimatkhau'	=>		'required|same:matkhau', 
    		'email'				=>		'required|email|unique:nguoidung,Email',
    		'quoctich'			=> 		'required',
    		'noisinh'			=>		'required',
    		'hinhdaidien'       =>      'image|mimes:jpeg,jpg,png,gif,svg|max:10000'

    	],
    	[
    		'hoten.required'				=>		'Không được để trống họ tên',
    		'tendangnhap.required'			=>		'Không được để trống tên đăng nhập',
    		'tendangnhap.unique'			=>		'Tên đăng nhập đã tồn tại',
    		'matkhau.required'				=>		'Không được để trống mật khẩu',
    		'matkhau.min'					=>		'Mật khẩu tối thiểu 5 ký tự',
    		'nhaplaimatkhau.required'		=>		'Không được để trống mật khẩu',
    		'nhaplaimatkhau.same'			=>		'Mật khẩu nhập lại không trùng khớp',
    		'email.required'				=>		'Không được để trống email',
    		'email.email'					=>		'Email không hợp lệ',
    		'email.unique'					=>		'Email đã tồn tại',
    		'quoctich.required'				=>		'Không được để trống quốc tịch',
    		'noisinh.required'				=>		'Không được để trống nơi sinh',
    		'hinhdaidien.image'             =>      'Hình đại diện không đúng định dạng',
            'hinhdaidien.mimes'             =>      'Hình ảnh phải có định dạng : jpeg,jpg,png,gif,svg',
            'hinhdaidien.max'               =>      'Kích thước hình ảnh quá lớn'
    	]);

    	$nguoidung = new NguoiDung;

    	$nguoidung->HoTen 			= 		$request->hoten;
    	$nguoidung->ChucVu	 		= 		$request->chucvu;
    	$nguoidung->username 		= 		$request->tendangnhap;
    	$nguoidung->password 		=		$request->matkhau;
    	$nguoidung->Email 			= 		$request->email;
    	$nguoidung->NgaySinh 		= 		$request->ngaysinh;
    	$nguoidung->QuocTich 		= 		$request->quoctich;
    	$nguoidung->GioiTinh 		= 		$request->gioitinh;
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
    	return redirect()->route('DanhSachNguoiDung')->with('success','Thêm người dùng thành công');

    }

    public function getXoa($id){
        $nguoidung = NguoiDung::with('CauThu')->get();
    	$nguoidung = NguoiDung::find($id);
        if($nguoidung->ChucVu == 'cauthu'){
            return redirect()->back()->with('error','Tồn tại cầu thủ');
        }
        else{
            $nguoidung->delete();
            return redirect()->route('DanhSachNguoiDung')->with('success','Xoá người dùng thành công');
        }
    }

    public function getSua($id){
        $nguoidung = NguoiDung::find($id);
    	return view('admin.pages.nguoidung.sua', compact('nguoidung'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request, [
    		'hoten' 			=> 		'required',
    		'tendangnhap'		=>		'required|',
    		'email'				=>		'required|email|',
    		'quoctich'			=> 		'required',
    		'noisinh'			=>		'required',
    		'hinhdaidien'		=>		'image|mimes:jpeg,jpg,png,gif,svg|max:10000'

    	],
    	[
    		'hoten.required'				=>		'Không được để trống họ tên',
    		'tendangnhap.required'			=>		'Không được để trống tên đăng nhập',
    		'email.required'				=>		'Không được để trống email',
    		'email.email'					=>		'Email không hợp lệ',
    		'quoctich.required'				=>		'Không được để trống quốc tịch',
    		'email.required'				=>		'Không được để trống họ tên',
    		'noisinh.required'				=>		'Không được để trống nơi sinh',
    		'hinhdaidien.image'				=>		'Hình đại diện không đúng định dạng',
            'hinhdaidien.mimes'             =>      'Hình đại diện không đúng định dạng',
            'hinhdaidien.max'               =>      'Kích thước hình ảnh tối đa : 10MB'
    	]);

    	$nguoidung = NguoiDung::find($id);

    	$nguoidung->HoTen 			= 		$request->hoten;
    	$nguoidung->ChucVu	 		= 		$request->chucvu;
    	$nguoidung->username 		= 		$request->tendangnhap;
    	
    	$nguoidung->Email 			= 		$request->email;
    	$nguoidung->NgaySinh 		= 		$request->ngaysinh;
    	$nguoidung->QuocTich 		= 		$request->quoctich;
    	$nguoidung->GioiTinh 		= 		$request->gioitinh;
    	$nguoidung->NoiSinh 		= 		$request->noisinh;

    	if($request->hasFile('hinhdaidien')){
    		$img = $request->file('hinhdaidien');
    		$img->move('Client/images/players/', time().$img->getClientOriginalName());
    		$nguoidung->HinhDaiDien =  time().$img->getClientOriginalName();
    	}

    	$nguoidung->save();
    	return redirect()->route('DanhSachNguoiDung')->with('success','Cập nhật người dùng thành công');
    }
}
