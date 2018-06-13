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
		<div class="container">

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
	@stop

	@section('script')
		{!! $LichLuyenTap->script() !!}
	@stop