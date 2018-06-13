@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Giải Đấu')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Thêm Giải đấu</h3>
				

				<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Form :</h4>
							</div>
							<div class="form-body">

								@if(count($errors) > 0)                       
                            		<div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        		@endif

								<form method="POST" class="form-horizontal" action="admin/giai-dau/them" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="form-group">
										<label class="control-label col-sm-2">Tên giải đấu:</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" placeholder="Nhập tên giải đấu" name="tengiaidau">
										</div>
				    				</div>

								    <div class="form-group">
								    	<label class="control-label col-sm-2" for="pwd">Năm bắt đầu mùa giải:</label>
								    	<div class="col-sm-6">          
								        	<input type="number" min="1990" max="2090" step="1" value="2018" name="nambatdau"/>
								      	</div>
								    </div>

								    <div class="form-group">
								    	<label class="control-label col-sm-2" for="pwd">Năm kết thúc mùa giải:</label>
								    	<div class="col-sm-6">          
								        	<input type="number" min="1990" max="2090" step="1" value="2018" name="namketthuc"/>
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

@section('script')
<script type="text/javascript">
	$('.alert').delay(5000).slideUp()
</script>
@endsection