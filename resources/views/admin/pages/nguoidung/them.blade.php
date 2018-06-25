@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Người Dùng')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">

        <div class="row">
            <h3 class="title1">Thêm người dùng :</h3>

            @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif
                      
            @if(session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
              </div>
            @endif
				

        <div class="form-three widget-shadow">
              <form method="POST" class="form-horizontal" action="admin/nguoi-dung/them" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('hoten') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Tên người dùng:</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Nhập tên người dùng" name="hoten">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('hoten'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('hoten') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('chucvu') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Chức vụ:</label>
                      <div class="col-md-3">
                          <select class="control-label " name="chucvu" >
                            <option value="huanluyenvien">Huấn luyện viên</option>
                            <option value="nhanvienyte">Nhân viên y tế</option>
                            <option value="admin">Admin</option>
                          </select>
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('chucvu'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('chucvu') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('tendangnhap') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Tên đăng nhập:</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="tendangnhap">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('tendangnhap'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('tendangnhap') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('matkhau') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Mật khẩu:</label>
                      <div class="col-md-3">
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="matkhau">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('matkhau'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('matkhau') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('nhaplaimatkhau') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Nhập lại mật khẩu:</label>
                      <div class="col-md-3">
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="nhaplaimatkhau">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('nhaplaimatkhau'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('nhaplaimatkhau') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Email:</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Nhập Email" name="email">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('email') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('ngaysinh') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Ngày sinh:</label>
                      <div class="col-md-3">
                        <input type="date" class="form-control date" placeholder="Ngày sinh"  name="ngaysinh" value="<?= date('Y-m-d') ?>">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('ngaysinh'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('ngaysinh') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('quoctich') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Quốc tịch:</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Nhập quốc tịch" name="quoctich">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('quoctich'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('quoctich') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('gioitinh') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Giới tính:</label>
                      <div class="col-md-3">
                        <div class="radio">
                          <label><input type="radio" name="gioitinh" value="0" checked="">Nam</label>
                          <label><input type="radio" name="gioitinh" value="1">Nữ</label>
                        </div>
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('gioitinh'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('gioitinh') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('noisinh') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Nơi sinh:</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Nhập nơi sinh" name="noisinh">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('noisinh'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('noisinh') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('hinhdaidien') ? 'has-error' : '' }}">
                      <label for="txtarea1" class="col-md-4 control-label">Hình đại diện:</label>
                      <div class="col-md-3">
                        <input type="file" class="form-control" name="hinhdaidien">
                      </div>
                      <div class="col-md-5">
                        @if ($errors->has('hinhdaidien'))
                          <span class="help-block">
                            <strong style="color:#E01A22">
                              {{ $errors->first('hinhdaidien') }}
                            </strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                


                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group">
                      <div  style="margin-bottom: -50px !important" class="col-md-8 ">
                        <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                      </div>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
      
				<div class="clearfix"></div>
			</div>
	</div>
@endsection