@extends ('cauthu.layouts.master')

@section ("title")
Liverpool FC - {{  $tenCauThu  }}
@stop

@section ('content')

<div class="kode_benner1 bamnner2">
	<div class="kode_benner1_text">
		<h2>Lịch luyện tập</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
				<li><a href="cau-thu/{{ $tenCauThu }}">Trang chủ</a></li>
				<li class="active">Lịch luyện tập</li>
			</ul>
		</div>
	</div>
</div>

<div class="kode-content">

	<section>
		<div class="container" >

			<div class="ftb-tabs-wrap">
				<div class="tab-content">

					<div id="profileone">
						<div class="kode_calendar">	
							{!! $LichLuyenTap->calendar() !!}
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	
	<?php $stt=0; ?>
	@foreach ($NgayCauThuTap as $NgayTap)
	<div class="modal fade" id="LichModal{{ $NgayTap->id }}" tabindex="-1" role="dialog" aria-labelledby="LichModal" aria-hidden="true">
		<div class="modal-dialog" style="max-width:460px;">
			<div class="modal-content">
				<div class="modal-header">
					<h4  style="font-family:'arial';color:red; font-style: bold" class=" text-center modal-title custom_align" id="Heading">Lịch luyện tập </h4>
					<p class="text-center">{{ $NgayTap->CaLuyenTap }} - {{ date('d/m/Y', strtotime($NgayTap->NgayLuyenTap)) }}</p>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-md-12">
							<h4 style="font-family:'arial'; font-style: bold; margin-bottom: 10px">Các bài tập: </h4>
						</div>
						<br>
						@foreach ($NoiDungLuyenTap[$stt] as $BaiTap)
						<div class="col-md-12">
							<p>{{ $BaiTap->TenBaiTap  }}</p>
						</div>
						@endforeach
					</div>

				</div>
				<div class="modal-footer ">
					<button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> OK!</button>
				</div>
			</div>
			<!-- /.modal-content --> 
		</div>
		<!-- /.modal-dialog --> 
	</div>
	<?php ++$stt; ?>
	@endforeach

</div>
@stop

@section('script')
{!! $LichLuyenTap->script() !!}
@stop