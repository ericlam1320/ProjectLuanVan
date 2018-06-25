@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Lịch Thi Đấu')
@section('content')

	<div id="page-wrapper">
				
			<div class="main-page">

				<div class="row">
						<h3 class="title1">Cập nhật tỉ số :</h3>

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
							<form method="POST" class="form-horizontal" action="admin/lich-thi-dau/cap-nhat-ti-so/{{$trandau[0]->id}}/{{$trandau[1]->id}}" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group {{ $errors->has('tisoa') ? 'has-error' : '' }}">

											<div class="col-md-4">
												<img height="25" style="margin:0px 5px 0px 15px" src="Client/images/logos/{{ $trandau[0]->HinhAnhCauLacBo_lon }}" alt="">
											</div>
											<div class="col-md-3">
												<input style="height: 30px" class="form-control1" type="number" value="{{$trandau[0]->TiSo}}" name="tisoa">
											</div>

											<div class="col-md-5">
						                      @if ($errors->has('tisoa'))
						                        <span class="help-block">
						                          <strong style="color:#E01A22">
						                            {{ $errors->first('tisoa') }}
						                          </strong>
						                        </span>
						                      @endif
						                    </div>

										</div>

										<div class="form-group {{ $errors->has('tisob') ? 'has-error' : '' }}">

											<div class="col-md-4">
												<img height="25" style="margin:0px 5px 0px 15px" src="Client/images/logos/{{ $trandau[1]->HinhAnhCauLacBo_lon }}" alt="">
											</div>
											<div class="col-md-3">
												<input style="height: 30px" class="form-control1" value="{{$trandau[1]->TiSo}}" type="number" name="tisob">
											</div>

											<div class="col-md-5">
						                      @if ($errors->has('tisob'))
						                        <span class="help-block">
						                          <strong style="color:#E01A22">
						                            {{ $errors->first('tisob') }}
						                          </strong>
						                        </span>
						                      @endif
						                    </div>

										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div  style="margin-bottom: -50px !important" class="col-md-6 ">
										<button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
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