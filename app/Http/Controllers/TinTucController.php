<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;

class TinTucController extends Controller
{
    public function getDanhSach(){
    	$tintuc = TinTuc::all();
    	return view('admin.pages.tintuc.danhsach', compact('tintuc'));
    }

    public function getThem(){
    	return view('admin.pages.tintuc.them');
    }

    public function postThem(Request $request){
    	$this->validate($request,[
    		'tieude'		=>		'required|unique:tintuc,TieuDe',
    		'tomtat'		=>		'required|unique:tintuc,TomTat', 
    		'noidung'		=>		'required|unique:tintuc,NoiDung',
    		'hinhtintuc'	=>		'image|mimes:jpeg,jpg,png,gif,svg|max:10000'
    	],
    	[
    		'tieude.required'			=>		'Không được để trống tiêu đề',
    		'tieude.unique'				=>		'Tiêu đề đã tồn tại',
    		'tomtat.required'			=>		'Không được để trống tóm tắt',
    		'tomtat.unique'				=>		'Tóm tắt đã tồn tại',
    		'noidung.required'			=>		'Không được để trống nội dung',
    		'noidung.unique'			=>		'Nội dung đã tồn tại',
    		'hinhtintuc.image'			=>		'Hình ảnh không đúng định dạng',
    		'hinhtintuc.mimes'			=>		'Hình ảnh phải có định dạng : jpeg,jpg,png,gif,svg',
    		'hinhtintuc.required'		=>		'Kích thước hình ảnh quá lớn',
    	]);

    	$tintuc = new TinTuc;
    	$tintuc->TieuDe 		=		$request->tieude;
    	$tintuc->TomTat 		=		$request->tomtat;
    	$tintuc->NoiDung 		=		$request->noidung;
    	$tintuc->Hinh 			=		$request->hinhtintuc;
    	$tintuc->NgayDang 		=		$request->ngaydang;

    	if($request->hasFile('hinhtintuc')){
    		$img = $request->file('hinhtintuc');
    		$img->move('adminAssets/img/photos/', time().$img->getClientOriginalName());
    		$tintuc->Hinh =  time().$img->getClientOriginalName();
    	}
    	else{
    		$tintuc->Hinh = 'noone.png';
    	}

    	$tintuc->save();

    	return redirect()->route('DanhSachTinTuc')->with('success','Thêm tin tức thành công');
    }

    public function getXoa($id){
        $tintuc = TinTuc::find($id);
        $tintuc->delete();
        return redirect()->route('DanhSachTinTuc')->with('success','Xoá tin tức thành công');
    }

    public function getSua($id){
        $tintuc = TinTuc::find($id);
    	return view('admin.pages.tintuc.sua', compact('tintuc'));
    }

    public function postSua($id, Request $request){
        $this->validate($request,[
            'tieude'        =>      'required',
            'tomtat'        =>      'required', 
            'noidung'       =>      'required',
            'hinhtintuc'    =>      'image|mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],
        [
            'tieude.required'           =>      'Không được để trống tiêu đề',
            'tomtat.required'           =>      'Không được để trống tóm tắt',
            'noidung.required'          =>      'Không được để trống nội dung',
            'hinhtintuc.image'          =>      'Hình ảnh không đúng định dạng',
            'hinhtintuc.mimes'          =>      'Hình ảnh phải có định dạng : jpeg,jpg,png,gif,svg',
            'hinhtintuc.required'       =>      'Kích thước hình ảnh quá lớn',
        ]);

        $tintuc = TinTuc::find($id);
        $tintuc->TieuDe         =       $request->tieude;
        $tintuc->TomTat         =       $request->tomtat;
        $tintuc->NoiDung        =       $request->noidung;
        $tintuc->Hinh           =       $request->hinhtintuc;
        $tintuc->NgayDang       =       $request->ngaydang;

        if($request->hasFile('hinhtintuc')){
            $img = $request->file('hinhtintuc');
            $img->move('adminAssets/img/photos/', time().$img->getClientOriginalName());
            $tintuc->Hinh =  time().$img->getClientOriginalName();
        }
        else{
            $tintuc->Hinh = 'noone.png';
        }

        $tintuc->save();

        return redirect()->route('DanhSachTinTuc')->with('success','Cập nhật tin tức thành công');
    }
}
