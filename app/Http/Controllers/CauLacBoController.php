<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CauLacBo;

class CauLacBoController extends Controller
{
    public function getDanhSach(){
    	$caulacbo = CauLacBo::all();
    	return view('admin.pages.caulacbo.danhsach', compact('caulacbo'));
    }

    public function getThem(){
    	return view('admin.pages.caulacbo.them');
    }

    public function postThem(Request $request){
    	$this->validate($request, [
    		'tendaydu' 						=>		'required|unique:caulacbo,TenDayDu',
    		'tenviettat'					=>		'required|unique:caulacbo,TenVietTat',
    		'truso'							=>		'required|unique:caulacbo,TruSo',
    		'bietdanh'						=>		'required',
    		'lichsu'						=>		'required',
    		'sanvandong'					=>		'required|unique:caulacbo,SanVanDong',
    		'hinhanhcaulacbo'				=>		'image|mimes:jpeg,jpg,png,gif,svg|max:10',
    		'hinhanhcaulacbo_lon'			=>		'image|mimes:jpeg,jpg,png,gif,svg|max:100',
    		
    	], 
    	[
    		'tendaydu.required'						=>			'Không được để trống',
    		'tendaydu.unique'						=>			'Tên đầy đủ đã tồn tại',
    		'lichsu.required'						=>			'Không được để trống',
    		'tenviettat.required'					=>			'Không được để trống',
    		'tenviettat.unique'						=>			'Tên viết tắt đã tồn tại',
    		'truso.required'						=>			'Không được để trống',
    		'truso.unique'							=>			'Trụ sở đã tồn tại',
    		'bietdanh.required'						=>			'Không được để trống',
    		'sanvandong.required'					=>			'Không được để trống',
    		'sanvandong.unique'						=>			'Sân vận động đã tồn tại',
    		'hinhanhcaulacbo.image'					=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo.mimes'					=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo.max'					=>			'Kích thước tối đa là 10KB',
    		'hinhanhcaulacbo_lon.image'				=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo_lon.mimes'				=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo_lon.max'				=>			'Kích thước tối đa là 100KB',
    		
    	]);

    	$caulacbo = new CauLacBo;


    	$caulacbo->TenDayDu				=		$request->tendaydu;
    	$caulacbo->TenVietTat			=		$request->tenviettat;
    	$caulacbo->TruSo				=		$request->truso;
    	$caulacbo->NgayThanhLap			=		$request->ngaythanhlap;
    	$caulacbo->BietDanh				=		$request->bietdanh;
    	$caulacbo->SanVanDong			=		$request->sanvandong;
    	$caulacbo->HinhAnhCauLacBo		=		$request->hinhanhcaulacbo;
    	$caulacbo->HinhAnhCauLacBo_Lon  =		$request->hinhanhcaulacbo_lon;
    	$caulacbo->LichSu				=		$request->lichsu;


    	if($request->hasFile('hinhanhcaulacbo', 'hinhanhcaulacbo_lon')){
    		$img = $request->file('hinhanhcaulacbo');
    		$img2 = $request->file('hinhanhcaulacbo_lon');

    		$img->move('Client/images/logos/', time().$img->getClientOriginalName());
    		$img2->move('Client/images/logos/', time().$img2->getClientOriginalName());

    		$caulacbo->HinhAnhCauLacBo =  time().$img->getClientOriginalName();
    		$caulacbo->HinhAnhCauLacBo_Lon =  time().$img2->getClientOriginalName();
    	}
    	else{
    		$caulacbo->HinhAnhCauLacBo = 'noone.png';
    		$caulacbo->HinhAnhCauLacBo_Lon = 'noone.png';
    	}

    	$caulacbo->save();


    	return redirect()->route('DanhSachCauLacBo')->with('success','Thêm câu lạc bộ thành công');
    }

    public function getXoa($id){
    	$caulacbo = CauLacBo::find($id);
    	$caulacbo->delete();
    	return redirect()->route('DanhSachCauLacBo')->with('success','Xoá câu lạc bộ thành công');
    }

    public function getSua($id){
    	$caulacbo = CauLacBo::find($id);
    	return view('admin.pages.caulacbo.sua', compact('caulacbo'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request, [
    		'tendaydu' 						=>		'required',
    		'tenviettat'					=>		'required',
    		'truso'							=>		'required',
    		'bietdanh'						=>		'required',
    		'lichsu'						=>		'required',
    		'sanvandong'					=>		'required',
    		'hinhanhcaulacbo'				=>		'image|mimes:jpeg,jpg,png,gif,svg|max:10',
    		'hinhanhcaulacbo_lon'			=>		'image|mimes:jpeg,jpg,png,gif,svg|max:100',
    		
    	], 
    	[
    		'tendaydu.required'						=>			'Không được để trống',
    		'lichsu.required'						=>			'Không được để trống',
    		'tenviettat.required'					=>			'Không được để trống',
    		'truso.required'						=>			'Không được để trống',
    		'bietdanh.required'						=>			'Không được để trống',
    		'sanvandong.required'					=>			'Không được để trống',
    		'hinhanhcaulacbo.image'					=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo.mimes'					=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo.max'					=>			'Kích thước tối đa là 10KB',
    		'hinhanhcaulacbo_lon.image'				=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo_lon.mimes'				=>			'Sai định dạng hình ảnh',
    		'hinhanhcaulacbo_lon.max'				=>			'Kích thước tối đa là 100KB',
    		
    	]);

    	$caulacbo = CauLacBo::find($id);


    	$caulacbo->TenDayDu				=		$request->tendaydu;
    	$caulacbo->TenVietTat			=		$request->tenviettat;
    	$caulacbo->TruSo				=		$request->truso;
    	$caulacbo->NgayThanhLap			=		$request->ngaythanhlap;
    	$caulacbo->BietDanh				=		$request->bietdanh;
    	$caulacbo->SanVanDong			=		$request->sanvandong;
    	$caulacbo->LichSu				=		$request->lichsu;


    	if($request->hasFile('hinhanhcaulacbo', 'hinhanhcaulacbo_lon')){
    		$img = $request->file('hinhanhcaulacbo');
    		$img2 = $request->file('hinhanhcaulacbo_lon');

    		$img->move('Client/images/logos/', time().$img->getClientOriginalName());
    		$img2->move('Client/images/logos/', time().$img2->getClientOriginalName());

    		$caulacbo->HinhAnhCauLacBo =  time().$img->getClientOriginalName();
    		$caulacbo->HinhAnhCauLacBo_Lon =  time().$img2->getClientOriginalName();
    	}

    	$caulacbo->save();


    	return redirect()->route('DanhSachCauLacBo')->with('success','Thêm câu lạc bộ thành công');
    }
}
