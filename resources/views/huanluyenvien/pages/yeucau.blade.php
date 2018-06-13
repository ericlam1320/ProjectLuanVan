@extends ('huanluyenvien.layouts.master')

@section ("title")
Liverpool FC - Phản hồi yêu cầu
@stop

@section ('style')
<style>
	.kode_player_item{
    	padding: 20px;
    	height: 180px;
    	display: block;
	}
	.HinhForm{
		text-align: right;
		margin-bottom: -33px;
		z-index: 0
	}

	@media (max-width: 1024px) {
		.kode_player_item{
			height: 165px;
		}
		.kode_contant_area{
			margin-top: -40px;
		}
	}
</style>
@endsection

@section ('content')

<div class="kode_benner1 bamnner2">
	<div class="kode_benner1_text">
		<h2>Phản hồi yêu cầu</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
				<li><a href="huan-luyen-vien/1">Trang chủ</a></li>
				<li class="active">Phản hồi yêu cầu</li>
			</ul>
		</div>
	</div>
</div>

<div class="kode-content">
	<div class="ft-match-slider">

		<div class="kode_player_wraper">
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-md-offset-2">
						<div class="">

							<form action="" method="POST">

								<div class="col-md-12">
									<div class="col-md-3">
										<label for="">Chọn yêu cầu : </label>
									</div>
									<div class="col-md-9">
										<div class="kode_contant_field">
											<select name="YeuCau" id="">
												<option value="">- Chưa chọn yêu cầu -</option>
												<option value="">Mohamed Salah</option>
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="col-md-3">
										<label for="">Cầu thủ yêu cầu : </label>
									</div>
									<div class="col-md-9">
										<div class="kode_contant_field">
											<input type="text" placeholder="Mohamed Salah" value="Mohamed Salah" name="CauThu" disabled>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="col-md-3">
										<label for="">Nội dung yêu cầu : </label>
									</div>
									<div class="col-md-9">
										<div class="kode_contant_area">
											<textarea name="NoiDungYeuCau" placeholder="Nội dung yêu cầu" disabled>Tôi muốn ...</textarea>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="col-md-3">
										<label for="">Nội dung phản hồi:</label>
									</div>
									<div class="col-md-9">
										<div class="kode_contant_area">
											<textarea name="NoiDungPhanHoi" placeholder="Nội dung phản hồi" ></textarea>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="kode_contant_area" style="text-align: right">
										<button style=" width: 180px" type="submit">Gửi phản hồi</button>
									</div>
								</div>
							</form>	

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

@stop
