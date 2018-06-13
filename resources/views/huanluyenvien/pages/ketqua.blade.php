@extends ('huanluyenvien.layouts.master')

@section ('title', 'Liverpool FC - Kết quả')

@section ('content')

				<!--// KODE BENNER1 START //-->
				<div class="kode_benner1 bamnner2">
					<div class="kode_benner1_text">
						<h2>Kết quả trận đấu</h2>
					</div>
					<div class="kode_benner1_cols">
						<div class="container kf_container">
							<ul class="breadcrumb">
							  <li><a href="huan-luyen-vien/1">Trang chủ</a></li>
							  <li class="active">Kết quả</li>
							</ul>
						</div>
					</div>
				</div>
				<!--// KODE BENNER1 END //-->
				<div class="kode_fixture_wraper">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								
								@for ($i=0;$i<=3;$i++)
								<section class="ftb-resultbg ftb_2 ftb_3">
									<div class="heading5 hdg_5 hdg_6">
									  <h4>Vòng {{ 38-$i }}</h4>
									</div>
											<div class="ftb-result-wrap wrap_2">
											  <div class="ftb-result1">
												<div class="ftb-result-logo">
												  <a href="#"><img src="Client/images/logos/liverpool_big.png" alt=""></a>
												</div>
												<div class="text text_2">
												  <h6><a href="#">Liverpool</a></h6>
												  <span>Daniel Sturridge - 1 goal</span>
												</div>
											  </div>

											  <div class="ftb-final-result result_2">
												<em>24/04/2018 | 2:15 pm <i>Anfield</i></em>
												<p><span class="grater">1</span> - <span>0</span></p>
											  </div>

											  <div class="ftb-result1 ftb-result2">
												<div class="ftb-result-logo">
												  <a href="#"><img src="Client/images/logos/MU_big.png" alt=""></a>
												</div>
												<div class="text text_2">
												  <h6><a href="#">Manchester Utd</a></h6>
												</div>
											  </div>
											</div>
								</section>
								@endfor

								<div class="kode_blog_pagination">
									<a class="left" href="#"><i class="fa fa-angle-double-left"></i></a>
									<a href="#">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<a href="#">4</a>
									<a href="#">5</a>
									<a class="right" href="#"><i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="kode_detail_side_bar">

									<form class="kode_detail_side_field">
										<input type="text" placeholder="Tìm kiếm" required>
										<button><i class="fa fa-search"></i></button>
									</form>

									<div class="ftb-fixture-row">
										<h5>Bảng xếp hạng</h5>
									  <!--// RATING TABLE //-->
										<ul class="ftb-rating-table rating_2">

										  @for($i=1;$i<=10;$i++)
										  <li class="{{$i==4 ? 'BangXepHangDoiBong' : ''}}">
											<div class="ftb-position">
											  {{$i}} . 
											</div>
											<div class="ftb-team-name">
											  <img src="Client/images/logos/liverpool.png" alt="">
											  <a href="#">Đội {{$i}}</a>
											</div>
											<div class="ftb-team-points">
											  {{50-$i}}
											</div>
										  </li>
										  @endfor

										</ul>
										<!--// RATING TABLE //-->
									</div>
	
								</div>
							</div>
						</div>
					</div>
				</div>	

@stop