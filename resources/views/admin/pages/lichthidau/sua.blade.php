@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Lịch Thi Đấu')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Cập nhật lịch thi đấu</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">
								
								<form class="form-horizontal" action="/action_page.php">

									<div class="form-group">
										<label class="control-label col-sm-2">Tên câu lạc bộ A:</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder="Liverpool" name="leaguetable">
										</div>
				    				</div>

				    				<div class="form-group">
										<label class="control-label col-sm-2">Tên câu lạc bộ B:</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder="Man City" name="leaguetable">
										</div>
				    				</div>

								    <div class="form-group">
								    	<label class="control-label col-sm-2" for="pwd">Giờ thi đấu:</label>
								    	<div class="col-sm-6">          
								        	<input type="datetime-local" name="startyear">
								      	</div>
								    </div>

								    <div class="form-group">
										<label class="control-label col-sm-2">Sân vận động:</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder="Anfield" name="stadium">
										</div>
				    				</div>

				    				<div class="form-group">
										<label class="control-label col-sm-2">Tỷ số:</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder="4-0" name="score">
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


	


