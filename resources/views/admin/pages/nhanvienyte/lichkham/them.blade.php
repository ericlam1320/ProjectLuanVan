@extends ('admin.layout.master_nhanvienyte')
@section ('title', 'Quản lý Lịch Khám')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Thêm lịch khám</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form class="form-horizontal" action="/action_page.php">

                  <div class="form-group">
                    <label class="control-label col-sm-2">Mã lịch khám: </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="LKXXX" name="malichkham" disabled="disabled">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Ngày khám:</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control date" placeholder="Ngày khám"  name="ngaykham" value="<?= date('Y-m-d') ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Ca khám:</label>
                      <div class="col-sm-4">
                        <select class="control-label " name="chucvu" >
                          <option value="sang">Sáng</option>
                          <option value="trua">Trưa</option>
                          <option value="chieu">Chiều</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Địa điểm:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Nhập địa điểm" name="diadiem">
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


	


