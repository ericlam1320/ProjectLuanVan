@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Cầu thủ')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">

        <div class="row">
            <h3 class="title1">Thêm cầu thủ :</h3>

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
              <form method="POST" class="form-horizontal" action="admin/cau-thu/them" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- row 1 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('hoten') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Tên người dùng:</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" placeholder="Nhập tên người dùng" name="hoten">
                        </div>
                        <div class="col-md-3">
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

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('tendangnhap') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Tên đăng nhập:</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="tendangnhap">
                        </div>
                        <div class="col-md-3">
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

                  </div>
                </div>

                <!-- row 2 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('matkhau') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Mật khẩu:</label>
                        <div class="col-md-5">
                          <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="matkhau">
                        </div>
                        <div class="col-md-3">
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

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('nhaplaimatkhau') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Nhập lại mật khẩu:</label>
                        <div class="col-md-5">
                          <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="nhaplaimatkhau">
                        </div>
                        <div class="col-md-3">
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

                  </div>
                </div>

                <!-- row 3 -->
                <!-- <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('chucvu') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Chức vụ:</label>
                        <div class="col-md-4">
                            <select style="width: 150px" class="control-label " name="chucvu" >
                              <option value="cauthu">Cầu thủ</option>
                            </select>
                        </div>
                        <div class="col-md-4">
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
                    
                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('gioitinh') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Giới tính:</label>
                        <div class="col-md-4">
                          <div class="radio">
                            <label><input type="radio" name="gioitinh" value="0" checked="">Nam</label>
                            <label><input type="radio" name="gioitinh" value="1">Nữ</label>
                          </div>
                        </div>
                        <div class="col-md-4">
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

                  </div>
                </div> -->
                  
                <!-- row 4 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Email:</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" placeholder="Nhập Email" name="email">
                        </div>
                        <div class="col-md-3">
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

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('ngaysinh') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Ngày sinh:</label>
                        <div class="col-md-5">
                          <input type="date" class="form-control date" placeholder="Ngày sinh"  name="ngaysinh" value="<?= date('Y-m-d') ?>">
                        </div>
                        <div class="col-md-3">
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

                  </div>
                </div>
                
                <!-- row 5 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('quoctich') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Quốc tịch:</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" placeholder="Nhập quốc tịch" name="quoctich">
                        </div>
                        <div class="col-md-3">
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

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('noisinh') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Nơi sinh:</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" placeholder="Nhập nơi sinh" name="noisinh">
                        </div>
                        <div class="col-md-3">
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

                  </div>
                </div>

                <!-- row 6 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('hinhdaidien') ? 'has-error' : '' }}">
                          <label for="txtarea1" class="col-md-4 control-label">Hình đại diện:</label>
                          <div class="col-md-5">
                            <input type="file" class="form-control" name="hinhdaidien">
                          </div>
                          <div class="col-md-3">
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

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('vitrisotruong') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Vị trí sở trường:</label>
                        <div class="col-md-4">
                            <select style="width: 190px" class="control-label " name="vitrisotruong" >
                              <option value="thumon">Thủ môn</option>
                              <option value="hauve">Hậu vệ</option>
                              <option value="tienve">Tiền vệ</option>
                              <option value="tiendao">Tiền đạo</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                          @if ($errors->has('vitrisotruong'))
                            <span class="help-block">
                              <strong style="color:#E01A22">
                                {{ $errors->first('vitrisotruong') }}
                              </strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- row 7 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('chieucao') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Chiều cao:</label>
                        <div class="col-md-5">
                            <input style="width: 190px" type="number" min="160" max="250" value="0" name="chieucao">
                        </div>
                        <div class="col-md-3">
                          @if ($errors->has('chieucao'))
                            <span class="help-block">
                              <strong style="color:#E01A22">
                                {{ $errors->first('chieucao') }}
                              </strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('cannang') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Cân nặng:</label>
                        <div class="col-md-5">
                            <input style="width: 190px" type="number" min="60" max="120" value="0" name="cannang">
                        </div>
                        <div class="col-md-3">
                          @if ($errors->has('cannang'))
                            <span class="help-block">
                              <strong style="color:#E01A22">
                                {{ $errors->first('cannang') }}
                              </strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <!-- row 8 -->
                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('soao') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Số áo:</label>
                        <div class="col-md-5">
                            <input style="width: 190px" type="number" min="1" max="99" value="0" name="soao">
                        </div>
                        <div class="col-md-3">
                          @if ($errors->has('soao'))
                            <span class="help-block">
                              <strong style="color:#E01A22">
                                {{ $errors->first('soao') }}
                              </strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('chanthuan') ? 'has-error' : '' }}">
                        <label for="txtarea1" class="col-md-4 control-label">Chân thuận:</label>
                        <div class="col-md-4">
                            <select style="width: 190px" class="control-label " name="chanthuan" >
                              <option value="1">Chân trái</option>
                              <option value="2">Chân phải</option>
                              <option value="3">Cả 2 chân</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                          @if ($errors->has('chanthuan'))
                            <span class="help-block">
                              <strong style="color:#E01A22">
                                {{ $errors->first('chanthuan') }}
                              </strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <!-- row 9 -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group {{ $errors->has('luocsucauthu') ? 'has-error' : '' }}">
                      <label class="control-label">
                          Lược sử cầu thủ : 
                          @if ($errors->has('luocsucauthu'))
                            <span class="help-block">
                              <strong style="color:#E01A22">
                                {{ $errors->first('luocsucauthu') }}
                              </strong>
                            </span>
                          @endif
                      </label>
                      <textarea class="form-control " rows="8" name="luocsucauthu" id="luocsucauthu"></textarea>
                      <script type="text/javascript">CKEDITOR.replace( 'luocsucauthu' );</script>
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