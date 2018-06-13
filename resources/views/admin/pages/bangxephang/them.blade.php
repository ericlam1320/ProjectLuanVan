@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Bảng Xếp Hạng')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Thêm bảng xếp hạng</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form class="form-horizontal" action="/action_page.php">

									<div class="form-group">
										<label class="control-label col-sm-2">Tên bảng xếp hạng:</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder="Nhập tên bảng xếp hạng" name="leaguetable">
										</div>
				    				</div>

								    <div class="form-group">
								    	<label class="control-label col-sm-2" for="pwd">Năm bắt đầu :</label>
								    	<div class="col-sm-6">          
								        	<input type="month" name="startyear">
								      	</div>
								    </div>

								    <div class="form-group">
								    	<label class="control-label col-sm-2" for="pwd">Năm kết thúc :</label>
								    	<div class="col-sm-6">          
								        	<input type="month" name="endyear">
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


	


