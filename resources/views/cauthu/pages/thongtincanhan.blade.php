@extends ('cauthu.layouts.master')

@section ("title")
Liverpool FC - {{  $tenCauThu  }}
@stop

@section ('content')

<div class="kode_benner1 bamnner2">
	<div class="kode_benner1_text">
		<h2>Thông tin cá nhân</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
				<li><a href="cau-thu/{{ $tenCauThu }}">Trang chủ</a></li>
				<li class="active">Thông tin cá nhân</li>
			</ul>
		</div>
	</div>
</div>

<div class="kode-content">
	<div class="ft-match-slider">

		<div class="kode_player_wraper">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="kode_player_fig">
							<figure>
								<img height="300" src="Client/images/players/Players_Home3.png" alt="">
							</figure>

						</div>
					</div>
					<div class="col-md-8">
						<div class="kode_player_item">

							<div class="row">
								<div class="kode-ply-slid">
									<div>
										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Tên:<span>Roberto Firmino</span></a>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Số áo:<span>9</span></a>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Quốc tịch:<span>Brazil</span></a>
											</div>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Ngày sinh:<span>02 - 10 - 1991</span></a>
											</div>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Nơi sinh:<span> Alagoas, Brasil</span></a>
											</div>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Tuổi : : <span>27 tuổi</span></a>
											</div>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Chiều cao :<span>1.8 m</span></a>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Cân nặng :<span>76 kg</span></a>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="kode_ply_list">
												<a >Vị trí  :<span>Tiền đạo</span></a>
											</div>
										</div>

										<div class="col-md-4-offset"></div>
									</div>										
								</div>	
								<div class="col-md-12" style="margin-top: 60px">
									<div class="col-md-11">
									<div class="kode_ply_text">
										<div class="kode_ply_icon">
											<h6>Social Network :</h6>
											<ul>
												<li><a href="https://www.facebook.com/LiverpoolFC"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://twitter.com/lfc"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.linkedin.com/company/liverpool-football-club"> <i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									</div>
									<div class="col-md-1">
									<div class="kode_ply_text">
										<div class="kode_ply_icon">
											<h6><a href="cau-thu/TenCauThu/thong-tin-ca-nhan/sua"><i class="fa fa-edit" style="font-size:30px; float:right"></i></a></h6>
										</div>
									</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<div class="ftb-counterup">
		<div class="container">
			<!--// HEADING 5 //-->
			<div class="heading5">
				<h4>Thành tích cá nhân</h4>
			</div>
			<!--// HEADING 5 //-->
			<div class="row">
				<!--// COUNTER //-->
				<div class="col-md-3 col-sm-3">
					<div class="counterup-dec">
						<span class="icon-football"></span>
						<div class="text">
							<h3 class="word-count">138</h3>
							<p>Số trận đã đấu</p>
						</div>
					</div>
				</div>
				<!--// COUNTER //-->
				<!--// COUNTER //-->
				<div class="col-md-3 col-sm-3">
					<div class="counterup-dec">
						<span class="icon-soccer"></span>
						<div class="text">
							<h3 class="word-count">102</h3>
							<p>Số bàn thắng</p>
						</div>
					</div>
				</div>
				<!--// COUNTER //-->
				<div class="col-md-3 col-sm-3">
					<div class="counterup-dec">
						<span class="icon-symbol"></span>
						<div class="text">
							<h3 class="word-count">108</h3>
							<p>Số trận thắng</p>
						</div>
					</div>
				</div>
				<!--// COUNTER //-->
				<!--// COUNTER //-->
				<div class="col-md-3 col-sm-3">
					<div class="counterup-dec">
						<span class="icon-cup"></span>
						<div class="text">
							<h3 class="word-count">2</h3>
							<p>Danh hiệu</p>
						</div>
					</div>
				</div>
				<!--// COUNTER //-->
			</div>
		</div>
	</div>

	<div class="kode_ply_gallery">
		<div class="container">
			<div class="heading5 black b_2">
				<h4>Thành tích cầu thủ <span>Firmino Firmino</span></h4>
			</div>
			<table class="kode_ply_table">
				<tr class="kode_ply_first">
					<th>Năm</th>
					<th>Đội bóng</th>
					<th>Trận</th>
					<th>Số đường chuyền</th>
					<th>Bàn thắng</th>
					<th>Kiến tạo</th>
					<th>Thẻ vàng</th>
					<th>Thẻ đỏ</th>
					<th>Điểm</th>
				</tr>

				<tr class="kode_ply_two">
					<td>2017</td>
					<td>Liverpool</td>
					<td>37</td>
					<td>2058</td>
					<td>24</td>
					<td>14</td>
					<td>10</td>
					<td>0</td>
					<td>8.0</td>
				</tr>

			</table>				
		</div>
	</div>
	@stop