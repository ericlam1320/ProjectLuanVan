@extends ('nhanvienyte.layout.master_nhanvienyte')
@section ('title', 'Quản lý Toa Thuốc')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Thêm toa thuốc</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form class="form-horizontal" action="/action_page.php">

                  <div class="form-group">
                    <label class="control-label col-sm-2">Mã toa thuốc: </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="TTXXX" name="malichkham" disabled="disabled">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Ngày khám:</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control date" placeholder="Ngày khám"  name="ngaykham" value="<?= date('Y-m-d') ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Ngày tái khám:</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control date" placeholder="Ngày tái khám"  name="ngay tai kham" value="<?= date('Y-m-d') ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Chẩn đoán:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Nhập chẩn đoán" name="chandoan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Hướng dẫn:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Nhập hướng dẫn" name="huongdan">
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


	


