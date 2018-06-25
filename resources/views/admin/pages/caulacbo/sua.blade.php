@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Câu lạc bộ')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">

        <div class="row">
            <h3 class="title1">Cập nhật câu lạc bộ :</h3>

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
                    <form method="POST" class="form-horizontal" action="admin/cau-lac-bo/sua/{{$caulacbo->id}}" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('tendaydu') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Tên đầy đủ:</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$caulacbo->TenDayDu}}" name="tendaydu">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('tendaydu'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('tendaydu') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                            </div>


                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('tenviettat') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Tên viết tắt:</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$caulacbo->TenVietTat}}" name="tenviettat">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('tenviettat'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('tenviettat') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                          </div>

                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('truso') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Trụ sở:</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$caulacbo->TruSo}}" name="truso">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('truso'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('truso') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                            </div>


                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('ngaythanhlap') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Ngày thành lập:</label>
                              <div class="col-md-5">
                                <input type="date" class="form-control date" name="ngaythanhlap" value="{{$caulacbo->NgayThanhLap}}">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('ngaythanhlap'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('ngaythanhlap') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                            </div>

                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('bietdanh') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Biệt danh:</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$caulacbo->BietDanh}}" name="bietdanh">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('bietdanh'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('bietdanh') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                          </div>


                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('sanvandong') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Sân vận động:</label>
                              <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$caulacbo->SanVanDong}}" name="sanvandong">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('sanvandong'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('sanvandong') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                            </div>

                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('hinhanhcaulacbo') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Hình ảnh câu lạc bộ :</label>
                              <div class="col-md-5">
                                <input type="file" class="form-control" name="hinhanhcaulacbo">
                                <img style="width: 30px" src="Client/images/logos/{{$caulacbo->HinhAnhCauLacBo}}" alt="">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('hinhanhcaulacbo'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('hinhanhcaulacbo') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                          </div>


                            <div class="col-md-6">
                            <div class="form-group {{ $errors->has('hinhanhcaulacbo_lon') ? 'has-error' : '' }}">
                              <label for="txtarea1" class="col-md-3 control-label">Hình ảnh câu lạc bộ (lớn):</label>
                              <div class="col-md-5">
                                <input type="file" class="form-control" name="hinhanhcaulacbo_lon">
                                <img style="width: 100px" src="Client/images/logos/{{$caulacbo->HinhAnhCauLacBo_lon}}" alt="">
                              </div>
                              <div class="col-md-4">
                                @if ($errors->has('hinhanhcaulacbo_lon'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('hinhanhcaulacbo_lon') }}
                                    </strong>
                                  </span>
                                @endif
                              </div>
                            </div>
                          </div>

                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group {{ $errors->has('lichsu') ? 'has-error' : '' }}">
                            <label class="control-label">
                                Lịch sử : 
                                @if ($errors->has('lichsu'))
                                  <span class="help-block">
                                    <strong style="color:#E01A22">
                                      {{ $errors->first('lichsu') }}
                                    </strong>
                                  </span>
                                @endif
                            </label>
                            <textarea class="form-control " rows="8" name="lichsu" id="lichsu">{{$caulacbo->LichSu}}</textarea>
                            <script type="text/javascript">CKEDITOR.replace( 'lichsu' );</script>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-9">
                          <div class="form-group">
                            <div  style="margin-bottom: -50px !important" class="col-md-8 ">
                              <button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
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