@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Tin Tức')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Cập nhật tin tức</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form method="POST" action="admin/news/them" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Tiêu đề</label>
                                <input type="text" class="form-control" placeholder="Góc chiến thuật: Khắc chế Ronaldo, Klopp sẽ chơi sơ đồ 3 hậu vệ?" name="tieude">
                              </div>
                            </div>   
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group ">
                                <label class="control-label">Tóm tắt</label>
                                <textarea id="demo" class="form-control " rows="8" placeholder="Để có thể khóa chặt ngòi nổ nguy hiểm nhất bên phía Real Madrid, HLV Jurgen Klopp có thể tính đến phương án sử dụng sơ đồ 3 hậu vệ." name="tomtat" id="tomtat"></textarea>
                                <script type="text/javascript">CKEDITOR.replace( 'tomtat' );</script>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group ">
                                <label class="control-label">Nội dung</label>
                                <textarea id="demo" class="form-control " rows="8" name="noidung" id="noidung"></textarea>
                                <script type="text/javascript">CKEDITOR.replace( 'noidung' );</script>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Ngày đăng</label>
                                <input type="date" class="form-control date" placeholder="Ngày đăng"  name="ngaydang" value="<?= date('Y-m-d') ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group label-floating">
                               <label class="control-label">Hình ảnh</label>
                                <input type="file" name="HinhTin" class="form-control" />
                              </div>
                            </div>
                          </div>


                          <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                          <div class="clearfix"></div>
                        </form>
						</div>
				</div>

				

        
				
				<div class="clearfix"></div>
			</div>
	</div>
@endsection