@extends ('admin.layout.master_nhanvienyte')
@section ('title', 'Quản lý Chấn Thương')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Cập nhật chấn thương</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form class="form-horizontal" action="/action_page.php">

                  <div class="form-group">
                    <label class="control-label col-sm-2">Mã chấn thương: </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="CT001" name="machanthuong" disabled="disabled">
                    </div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-sm-2">Tên chấn thương:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Rách gân Kheo" name="tenchanthuong">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Loại chấn thương:</label>
                        <div class="col-sm-4">
                          <select class="control-label " name="loaichanthuong" >
                            <option value="co">Chấn thương Cơ</option>
                            <option value="khop">Chấn thương Khớp</option>
                            <option value="xuong">Chấn thương Xương</option>
                            <option value="dau">Chấn thương Đầu</option>
                            <option value="ngoaida">Chấn thương Ngoài Da</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Thời gian hồi phục:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="3 tháng  " name="thoigianhoiphuc">
                      </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Cập nhật</button>
                        </div>
                    </div>

                </form>
						</div>
				</div>

				

        
				
				<div class="clearfix"></div>
			</div>
	</div>
@endsection


	


