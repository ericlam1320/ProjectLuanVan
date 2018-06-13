@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Người Dùng')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Thêm người dùng</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form class="form-horizontal" action="/action_page.php">

                  <div class="form-group">
                    <label class="control-label col-sm-2">Tên người dùng: </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Nhập tên người dùng" name="hoten">
                    </div>
                  </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Chức vụ:</label>
                        <div class="col-sm-4">
                          <select class="control-label " name="chucvu" >
                            <option value="huanluyenvien">Huấn luyện viên</option>
                            <option value="cauthu">Cầu thủ</option>
                            <option value="nhanvienyte">Nhân viên y tế</option>
                            <option value="admin">Admin</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Email:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Nhập Email" name="email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Ngày sinh:</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control date" placeholder="Ngày sinh"  name="NgaySinh" value="<?= date('Y-m-d') ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Quốc tịch:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Nhập quốc tịch" name="quoctich">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Giới tính:</label>
                      <div class="col-sm-4">
                        <div class="radio">
                          <label><input type="radio" name="gender" checked="">Male</label>
                          <label><input type="radio" name="gender">Female</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Nơi sinh:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Nhập nơi sinh" name="noisinh">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Hình đại diện:</label>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" name="HinhDaiDien">
                      </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Thêm</button>
                        </div>
                    </div>

                </form>
						</div>
				</div>

				

        
				
				<div class="clearfix"></div>
			</div>
	</div>
@endsection


	


