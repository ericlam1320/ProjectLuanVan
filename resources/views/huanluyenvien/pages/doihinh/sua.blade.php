@extends ('huanluyenvien.layouts.master')

@section ("title")
Liverpool FC - Cập nhật đội hình
@stop

@section ('script')
<style>
.panel{
	max-width: 900px;
	margin: 0px auto;
	padding: 0px;	
}
.panel-default{
	border: 1px solid #F5F1F1 !important;
	box-shadow: 0 -1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24) !important;
}
</style>
<script type="text/javascript">
	function preview_image(event) 
	{
		var reader = new FileReader();
		reader.onload = function()
		{
			var output = document.getElementById('output_image');
			output.src = reader.result;
		}
		reader.readAsDataURL(event.target.files[0]);
	}
</script>
@stop

@section ('content')

<div class="kode_benner1 bamnner2">
	<div class="kode_benner1_text">
		<h2>Cập nhật đội hình</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
				<li><a href="huan-luyen-vien/1">Trang chủ</a></li>
				<li><a href="huan-luyen-vien/1/doi-hinh">Đội hình</a></li>
				<li class="active">Cập nhật đội hình</li>
			</ul>
		</div>
	</div>
</div>

<div class="kode-content">

	<section>
		<div class="container">
			
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-body">
						@if (session('loi'))
						<div class="alert alert-danger">{{ session('loi') }}</div>
						@endif
						<form class="form-horizontal" method="POST" action="huan-luyen-vien/1/doi-hinh/sua/{{ $doihinh->id }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-group {{ $errors->has('TenDoiHinh') ? 'has-error' : '' }}">
								<label class="control-label col-sm-3" >Tên đội hình:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Nhập tên đội hình" name="TenDoiHinh" value="{{ old('TenDoiHinh', $doihinh->TenDoiHinh) }}">
									@if ($errors->has('TenDoiHinh'))
									<span class="help-block"><strong style="color:#E01A22">{{ $errors->first('TenDoiHinh') }}</strong></span>
									@endif
								</div>
							</div>
							<div class="form-group {{ $errors->has('HinhAnhDoiHinh') ? 'has-error' : '' }}">
								<label class="control-label col-sm-3" >Hình ảnh đội hình:</label>
								<div class="col-sm-9"> 
									<input type="file" name="HinhAnhDoiHinh" value="" class="form-control" accept="image/x-png,image/gif,image/jpeg" onchange="preview_image(event)" >
 									<img id="output_image" height="400" src="./Client/images/formations/{{ $doihinh->HinhAnhDoiHinh }}" alt="" />
									@if ($errors->has('HinhAnhDoiHinh'))
									<span class="help-block"><strong style="color:#E01A22">{{ $errors->first('HinhAnhDoiHinh') }}</strong></span>
									@endif
								</div>
							</div>
							<div class="form-group"> 
								<div class=" col-sm-12  text-right">
									<button type="submit" class="btn btn-success">Cập nhật đội hình</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</section>
</div>
@stop

@section ('script')
<script type="text/javascript">

		$(document).ready(function() {
			$('div.alert').delay(5000).slideUp();
		});

</script>
@stop